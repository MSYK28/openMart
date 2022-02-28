<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $products = Items::all();

        $cart = \Cart::getcontent();

        return view('index', ['products'=>$products, 'cart'=>$cart]);
    }
}
