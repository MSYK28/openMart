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
        $products = Items::findorfail($id);
        return view('shop.product',['products'=>$products]);
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



    public function checkout_order(Request $request)
    {
        $checkout = $this->validate($request,
            [
                'phone'=> 'required|regex:/(07)[0-9]{8}/',
                'location'=> 'required|max:255',
                'fav_language' =>'required',  
                'grand_total' => 'required'                        
            ]);

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
        $receipt = DB::table('order_lists')->where('order_id', $session)->get();
        $results = DB::table('items')
                    ->join('order_lists', 'items.id', '=', 'order_lists.item_id')
                    ->where('order_lists.order_id', $session)
                    ->get();

                    //Session::flush();
        return view('cart.finish', compact('receipt', 'session', 'orders', 'results'));
    }
}