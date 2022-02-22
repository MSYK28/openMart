<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
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
        return view('hiquip.hiquipview',['products'=>$products]);
    }

    public function add_to_cart(Products $product){

       // dd($product);

        //$product = Products::findOrFail($productid);

        //add to cart
        \Cart::session(auth()->id())->add(array(
        'id' => $product->id,
        'name' => $product->name,
        //'category'=>$product->category,
        'price' => $product->price,
        'quantity' => 1,
        'attributes' => array(),
        'associatedModel' => $product
    ));
    
    return redirect()->route('cart.index');
    }

     public function cart(){

        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('hiquip.cart',compact('cartItems'));
    }

     public function cart_destroy($itemId){

        $cartItems = \Cart::session(auth()->id())->remove($itemId);

        return back();
    }
    public function cart_update($rowId){

        \Cart::session(auth()->id())->update($rowId, ['quantity'=> array(
                'relative' => false,
                'value' => request('quantity')
        )
    ]);

        return back();
    }
    public function checkout(){

        return view('hiquip.checkout');
    }
}
