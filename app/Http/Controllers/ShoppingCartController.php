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

    public function hiquipview_product($id){

        $product = Items::find($id);
        return view('shop.product',['product'=>$product]);
    }

    public function add_to_cart(Items $product){

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

        return view('cart.checkout');
    }


}
