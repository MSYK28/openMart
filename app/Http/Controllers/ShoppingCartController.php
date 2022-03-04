<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Items;
use App\Models\Order;
use App\Models\Voucher;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use Image;
use File;
use Session;
use DB;
use Illuminate\Support\Facades\Log;
use Safaricom\Mpesa\Mpesa;


class ShoppingCartController extends Controller
{
    public function hiquipview(){

        $products = Items::all();

        $cart = \Cart::getcontent();

       //dd($cart);
        return view('shop.shop',['products'=>$products, 'cart'=>$cart]);


    }

    public function hiquipviewindex(){
        $products = Items::all();
        $cart = \Cart::getcontent();
        return view('index', ['products'=>$products, 'cart'=>$cart]);
    }

    public function hiquipview_product($id){
        $product = Items::findorfail($id);
        return view('shop.product',['product'=>$product]);
    }

    public function index(Items $post)
    {
        $posts = Items::all();

        return view('shop.product', compact('posts'));
    }

    public function show(Items $post)
    {
        return view('shop.product', compact('post'));
    }

    public function add_to_cart($id)
    {
        $product = Items::findOrFail($id);

       \Cart::add(
            $product->id,
            $product->name,
            $product->price ,
            1,
            array(),
         )->associate('App\Models\Items');


         return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function cart(){

        $cart = \Cart::getcontent();

        return view('cart.cart',compact('cart'));
    }

    public function cart_remove($itemId)
    {
        $cart = \Cart::remove($itemId);

        return back()->with('success', 'Product removed successfully!');
    }

    public function cart_update($rowId)
    {

        \Cart::update($rowId, ['quantity'=> array(
            'relative' => false,
            'value' => request('quantity')
         )
         ]);

        return back()->with('updated', 'Product updated successfully!');

    }

    public function checkout()
    {
             //$cartSubTotal= \Cart::getTotal();
        return view('cart.checkout');
    }

    //To access any mpesa api, we need to have a token
    public function getAccessToken(){
        $ch= curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
        curl_setopt($ch, CURLOPT_HTTPHEADER,['Authorization: Basic VWdpUkJBTXZ5RzRsZTZndFRHSmNyc0hJNEdId0pYTFc6dVp6aHZieVBnYlFOdHlNTA==']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);
        return $response->access_token;

    }
    /*
    * Mpesa Daraja Api has more than one APIs based on its services.
      These APIS include MPESA EXPRESS (Stkpush), B2C, B2B ....
      To interact with these different APIS requests are made to
      different urls. In a nutshell, requests will be made to
      different destinations. Nevertheless, the http request header of
      all the requests remains the same. So to avoid writing the http
      header again and again for all the APIs, we can extract out the
      code for inflating the http header and making an Http connection
      in a separate method called  makeHTTP.
      Credit to *Ben*
     */

    public function makeHttp($url, $body){
        //Different apis, different urls...

        $url = 'https://sandbox.safaricom.co.ke/mpesa/' . $url;
        $curl= curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array('Content-type:application/json','Authorization: Bearer b3w3F497TQMo4KKnZBwfKh2nfMKI'),
                CURLOPT_RETURNTRANSFER =>true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($body)
            )
        );
        $curl_response= curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }


    public function checkout_order(Request $request)
    {
        $checkout = $this->validate($request,
            [
                'phone'=> 'required|regex:/(2547)[0-9]{8}/',
                'location'=> 'required|max:255',
                'fav_language' =>'required',
                'grand_total' => 'required'
            ]);

        if($request->input('fav_language') == 'mpesa'){
            $phoneNumber= $request->input('phone');

            $timestamp = date('YmdHis');
            $BusinessShortCode = env('MPESA_STK_SHORTCODE');
            $password = 'MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjIwMzAyMTQwNDQw';
            $TransactionType = 'CustomerPayBillOnline';
            $Amount = '1';
            $PartyA = $phoneNumber;
            $PartyB = env('MPESA_STK_SHORTCODE');
            $PhoneNumber = $phoneNumber;
            $CallBackURL = 'https://mydomain.com/path';
            $AccountReference = 'Adibas';
            $TransactionDesc = 'Give me all your money ';
            $LipaNaMpesaPasskey=env('MPESA_PASSKEY');
            $Remarks='successful';

            $mpesa= new \Safaricom\Mpesa\Mpesa();

            $stkPushSimulation=$mpesa->STKPushSimulation(
                $BusinessShortCode,
                $LipaNaMpesaPasskey,
                $TransactionType,
                $Amount,
                $PartyA,
                $PartyB,
                $PhoneNumber,
                $CallBackURL,
                $AccountReference,
                $TransactionDesc,
                $Remarks);



        }

        $order = new Order();

        $order->phone_number =$request->input('phone');
        $order->location = $request->input('location');
        $order->payment_method = $request->input('fav_language');

        $order->grand_total = $request->input('grand_total');;
        $order->user_id = auth()->id();

        $order->save();
                //save order items
        $cart = \Cart::getContent();

        foreach($cart as $item){

            $product_attribute = Items::where('id', $item->id)->first();
            if($product_attribute){
                $stock = $product_attribute->quantity - (int) $item['quantity'];
                $product_attribute->update(['quantity' => $stock]);
            }
            $order->items()->attach($item->id, ['order_id'=>$order->id,'quantity'=> $item->quantity ]);
        }
                    //send email to customer

        if($order->save() == true){
            $recepient = Auth::user()->email;

            Mail::to($recepient)->send(new OrderMail($checkout));
            Session::flash('msg','Order successful');

        }else{
            echo "Error";

        }
                    //empty cart
        \Cart::clear();
                    //clear coupon
        session()->forget('coupon');

        Session::put('order',$order->id);

        return redirect('/finish');
    }

    public function receipt(){


                    $session = Session::get('order');
                    $orders = Order::where('id', $session)->get();

                    //$receipt = DB::select('select * from users where id = :id', ['id' => $session]);

                    // $receipt = DB::table('order_lists')->where('order_id', $session)->get();
                    
                    $results = DB::table('items')
                                ->join('order_lists', 'items.id', '=', 'order_lists.item_id')
                                ->where('order_lists.order_id', $session)
                                ->get();

                    foreach ($results as $result) {
                        $quantity = DB::table('order_lists')->where('order_id', $session)->where('item_id', $result->item_id)->first();
                        $result->quantity = $quantity->quantity;
                    }


                            


                    //Session::flush();
                    // $mi = new MultipleIterator();
                    // $mi->attachIterator(new ArrayIterator($results));
                    // $mi->attachIterator(new ArrayIterator($receipt));
                    // foreach($mi as list($recepient, receipt)) {
                    //     var_dump($results,$receipt);
                    //}

                    return view('cart.finish', compact('session', 'orders', 'results'));

    }



    public function stkpush(Request $request){
        $phoneNumber= "254769584101";

        $timestamp = date('YmdHis');
        $BusinessShortCode = env('MPESA_STK_SHORTCODE');
        $password = 'MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjIwMzAyMTQwNDQw';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = '1';
        $PartyA = $phoneNumber;
        $PartyB = env('MPESA_STK_SHORTCODE');
        $PhoneNumber = $phoneNumber;
        $CallBackURL = 'https://mydomain.com/path';
        $AccountReference = 'Adibas';
        $TransactionDesc = 'Give me all your money ';
        $LipaNaMpesaPasskey=env('MPESA_PASSKEY');
        $Remarks='successful';

        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks);


        return $stkPushSimulation;
    }
}