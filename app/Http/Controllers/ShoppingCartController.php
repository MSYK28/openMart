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
        return view('index', ['products'=>$products]);
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

    // public function cart()
    // {
    //     return view('cart.cart');
    // }

    public function add_to_cart($id)
    {

        // dd($product);

        $product = Items::findOrFail($id);
        // $cart = session()->get('cart', []);

        // //add to cart
        // if (isset($cart[$id])) {
        //     $cart[$id]['quantity']++;
        // } else {
        //     $cart[$id] = [
        //         'price' => $product->price,
        //         'name  '=> $product->name,
        //         'quantity'=> 1,
        //         'image' => $product->item_img
        //     ];

        // }

        //     session()->put('cart', $cart);
        //     return redirect()->back()->with('success', 'Product added to cart successfully!');

        
       \Cart::add(
            $product->id,
            $product->name,
            $product->price / 100,
            1,
            array(),
         )->associate('App\Models\Items');
       

         return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

        public function cart(){

            $cart = \Cart::getcontent();

            return view('cart.cart',compact('cart'));
        }
        // public function wishlist(){
            
        // }


        public function cart_remove($itemId)
        {

            // if ($request->id) {
            //     $cart = session()->get('cart');
            //     if (isset($cart[$request->id])) {
            //         unset($cart[$request->id]);
            //         session()->put('cart', $cart);
            //     }
            //     session()->flash('success', 'Product removed successfully');
            // }
             $cart = \Cart::remove($itemId);

                return back();
        }
            public function cart_update($rowId){

                // if($request->id && $request->quantity){
                //     $cart = session()->get('cart');
                //     $cart[$request->id]["quantity"] = $request->quantity;
                //     session()->put('cart', $cart);
                //     session()->flash('success', 'Cart updated successfully');
                // }

                   \Cart::update($rowId, ['quantity'=> array(
                'relative' => false,
                'value' => request('quantity')
                 )
                 ]);

        return back();


                return back();
            }

                public function checkout(){

                     //$cartSubTotal= \Cart::getTotal(); 
                    return view('cart.checkout');
                }



                public function checkout_order(Request $request){

                   


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



                    //payment
                    /* if($request->input('payment_method') == 'mpesa'){
                         return redirect()->route('mpesa.checkout');
                     }*/
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


                    /*take user to thank you
                    return "order completed,thak you for order";*/

                    return redirect()->route('shop');

                }



            }
