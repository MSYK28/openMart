<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Order;
use App\Models\Voucher;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use Image;
use File;

class WishlistController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        $user = Auth::user();
        $wishlist = new Wishlist;

        $wishlist = Wishlist::where("userID", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        return view('shop.wishlist', compact('wishlist'));
    }

    public function store(Request $request){
        //Validating title and body field
        // $this->validate($request, array(
            
        //     'itemID'=>'required',
        // ));

        $user = Auth::User();

        $wishlist = new Wishlist;
        $wishlist = Wishlist::getcontent();

        $wishlist->userID = $user->id;
        $wishlist->itemID = $request->itemID;
        
        $wishlist->save();
        return redirect('/wishlist/view')->with('flash_message', 'Item, '.$wishlist->product->name.' Added to your wishlist.');
    }

    public function destroy($id){
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();

        return redirect()->route('wishlist.index')->with('flash_message', 'Item deleted successfully');
    }
}
