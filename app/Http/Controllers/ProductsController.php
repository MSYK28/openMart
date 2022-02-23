<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Items;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.create');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function users()
    {
         $users = User::all();

        return view('admin.datatables.usersTable', compact('users'));
    }


    public function datatables()
    {
         $products = Items::all();

        return view('admin.datatables.productsTable', compact('products'));
    }

    public function orders()
    {
         $orders = Order::all();

        return view('admin.datatables.ordersTable', compact('orders'));
    }

    public function showAll()
    {
         $orders = Order::all();
         $products = Products::all();
         $users = User::all();

        return view('admin.datatables.ordersTable', compact('orders', 'products', 'users'));
    }
}
