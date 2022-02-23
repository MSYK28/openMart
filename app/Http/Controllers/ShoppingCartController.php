<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Items;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Image;
use File;
use Session;

class ShoppingCartController extends Controller
{
    public function hiquipview(){

        $products = Items::all();
        return view('shop.shop',['products'=>$products]);
    }

    public function hiquipviewindex(){

        $products = Items::all();
        return view('index',['products'=>$products]);
    }

    public function hiquipview_product($id){

        $product = Items::find($id);
        return view('shop.product',['product'=>$product]);
    }


    public function add_to_cart($id)
    {

        // dd($product);

        $product = Items::findOrFail($id);
        $cart = session()->get('cart', []);

        //add to cart
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name " => $product->name,
                //'category'=>$product->category,
                "price" => $product->price,
                'quantity' => 1,
                "image" => $product->item_img
            ];

        }

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');

    }
        public function cart(){

            return view('hiquip.cart');
        }

        public function cart_remove(Request $request)
        {

            if ($request->id) {
                $cart = session()->get('cart');
                if (isset($cart[$request->id])) {
                    unset($cart[$request->id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Product removed successfully');
            }
        }
            public function cart_update(Request $request){

                if($request->id && $request->quantity){
                    $cart = session()->get('cart');
                    $cart[$request->id]["quantity"] = $request->quantity;
                    session()->put('cart', $cart);
                    session()->flash('success', 'Cart updated successfully');
                }


                return back();
            }

                public function checkout(){

                    return view('cart.checkout');
                }

                public function checkout_order(Request $request){

                    $cart = session()->get('cart');
                    foreach(session('cart') as $id => $details){

                        $total += $details['price'] * $details['quantity'];

      }
                    $checkout = $this->validate($request,
                        [
                            'phone'=> 'required|regex:/(07)[0-9]{8}/',
                            'location'=> 'required|max:255',
                            'payment_method' =>'required'
                        ]);

                    $order = new Order();


                    $order->phone_number =$request->input('name');
                    $order->location = $request->input('location');
                    $order->payment_method = $request->input('payment_method');

                    $order->grand_total = $total;
                    $order->user_id = auth()->id();

                    $order->save();

                    //save order items

                    foreach($cart as $item){

                        $order->items()->attach($item->id, ['order_id'=>$order->id,'quantity'=> $item->quantity ]);
                    }



                    //payment
                    /* if($request->input('payment_method') == 'mpesa'){
                         return redirect()->route('mpesa.checkout');
                     }*/
                    //send email to customer
                    if($order->save() == true){
                        $recepient_email = $request->email;

                        Mail::to($request->email)->send(new OrderMail($checkout));
                        Session::flash('msg','Order successful');

                    }else{
                        echo "Error";

                    }
                    //empty cart
                    \Cart::session(auth()->id())->clear();



                    /*take user to thank you
                    return "order completed,thak you for order";*/

                    return redirect()->route('hiquip');

                }



            }
