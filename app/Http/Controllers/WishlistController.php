<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;
use Session;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Wishlist::where('userId', Auth::user())->get();

        return view('shop.wishlist',compact('wishlist'));

    }

    public function addToWishlist($id)
    {
        $product = Items::findOrFail($id);
        $wishlist = session()->get('wishlist', []);

        //add to cart
        if (isset($wishlist[$id])) {
            
        } else {
            $wishlist[$id] = [
                "name " => $product->name,
                "price" => $product->price,
                "image" => $product->item_img
            ];
        }

        session()->put('wishlist', $wishlist);
        return redirect()->back()->with('success', 'Product added to wishlist successfully!');
    }
}
