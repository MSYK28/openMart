<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Items;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Session;
use DB;


class AdminController extends Controller
{

    public function __construct()
    {
         $this->middleware(['auth']);
        //  $this->middleware('role:user');

    }
    public function index(){

        return view('admin.home');
    }

    // public function editproduct() {
    //     return view('admin.editProduct');
    // }

    public function user_view(){

        $user = Auth::user();
        //$users = User::withoutTrashed()->paginate(5);
        $trashes = User::onlyTrashed()->paginate(5);
        $users = User::whereHas('roles',
            function($q){
            $q->whereIn('name', ['user']);
        })->withoutTrashed()->paginate(5);
        return view('admin.admin_userview2',['users'=>$users])->withUser($user)->with(['trashes'=>$trashes]);
    }

    public function adduser_view(){

        $user = Auth::user();
        $roles = Role::all();
        return view('admin.add_user')->withUser($user)->with(['roles'=>$roles]);
    }
    public function add_user(Request $request){

        $this->validate($request,
            ['first_name'=> 'required|max:255',
            'last_name'=> 'required|max:255',
             'username'=> 'required|max:255',
              'email'=> 'required|email|unique:users|max:255',
              'password'=> 'required|confirmed'

            ]);
        //store user
       $user = User::create([
            'name'=> $request->first_name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

       //$user->attachRole('user');

       // $user = User::create($request->except(['_token', 'roles']));
        $user->syncRoles($request->roles);
        //$user->roles()->sync($request->roles);

        return redirect()->route('admin_user.view');

        //dd($request);
    }
    public function hiquip_view(){

        $user = Auth::user();
        //$products = Proucts::withTrashed()->paginate(5);
        $products = Items::withTrashed()->paginate(5);
        $trashes = Items::paginate(5);
        return view('admin.hiquipview',['products'=>$products],['trashes'=>$trashes])->withUser($user);
    }

    public function addproduct_view(){

        $user = Auth::user();
        $products = Items::all();
        return view('admin.add_hiquip')->withUser($user)->with(['products'=>$products]);
    }

    public function productCreate()
    {
        return view('admin.create');
    }

    public function addproduct(Request $request){

        $this->validate($request,
            ['name'=> 'required|max:255',
            'category'=> 'required|max:255',
            'brand'=>'required|max:255',
            'image'=>'required',
            'desc'=> 'required',
            'price'=> 'required|integer',
            'qty'=>'required|integer',
            ]);


        if($request->hasFile('image')){
            $product_img = $request->file('image');
            $filename = time() . '.' . $product_img->getClientOriginalExtension();
            Image::make($product_img)->resize(400,400)->save( public_path('assets/images/img/products/' . $filename) );
        }
        

        //store product
        $product = Items::create([
                'item_img'=> $filename,
                'name'=> $request->name,
                'category'=> $request->category,
                'brand'=> $request->brand,
                'description'=>  $request->desc,
                'price'=> $request->price,
                'quantity'=>$request->qty,
            ]);


       Session::flash('success','Product added successfull');
       return redirect()->back();

   }

    public function passwordEdit($id){

         $user = Auth::user();
         $users = User::findOrFail($id);

         return view('admin.userPasswordReset',['users'=>$users])->withUser($user);
    }

    public function passwordUpdate(Request $request){


        $user = Auth::user();

        $this->validate($request,
            [
             'password' => 'required|min:8|required_with:password_confirmation',

            ]);

        $users = User::findOrFail($request->id);
        $users->password = Hash::make($request['password']);

        $users->save();

        Session::flash('msg','Password Reset successfull');
        return redirect()->back();

    }

     public function user_delete($id){

        $users = User::findOrFail($id);
        $users->delete();

        Session::flash('msg','User successfully Soft Deleted');
        return redirect()->back();
    }
    public function user_restore($id){

        $users = User::withTrashed()->findOrFail($id);
        $users->restore();

        Session::flash('msg','User successfully Restored');
        return redirect()->back();
    }
    public function user_forcedelete($id){

        $users = User::onlyTrashed()->findOrFail($id);
        $users->forceDelete();

        Session::flash('msg','User successfully Permanently Deleted');
        return redirect()->back();
    }

    public function editUserView($id){

        $user = Auth::user();
        $users = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.editUser',['users'=>$users])->withUser($user)->with(['roles'=>$roles]);
    }
    public function adminUser_update(Request $request){

        $user = Auth::user();

        $this->validate($request,
            [
             'name'=> 'required|max:255',
            //  'email'=> 'required|email|unique:users|max:255',


            ]);

        $users = User::findOrFail($request->id);
        $users->name=$request->name;
        //$users->email=$request->email;
        $users->save();

        $users->syncRoles($request->roles);

        return redirect()->route('admin_user.view');
    }

    //ShoppingCart
     public function orderView(){

        $user = Auth::user();
        $orders = Order::paginate(10);
        return view('admin.orderview',['orders'=>$orders])->withUser($user);
    }
    public function orderitemsView(){

        $user = Auth::user();
        $orders = $users = DB::table('order_items')->paginate(10);
        return view('admin.orderitemsView',['orders'=>$orders])->withUser($user);
    }
    public function order_delete($id){

        $orders = Order::findOrFail($id);
        $orders->delete();

        Session::flash('msg','Order Deleted');
        return redirect()->back();
    }

     public function edit_hiquip($id){

        $user = Auth::user();
        $product = Items::findOrFail($id);
        return view('admin.editProduct',['product'=>$product])->withUser($user);
    }
    public function editproduct(Request $request){

        //$users = Auth::user();

        $editProduct = $this->validate($request,
            ['product_name'=> 'required|max:255',
            'quantity'=> 'required|integer',
             'description'=> 'required',
             'price'=> 'required|integer',

            ]);

        if($request->hasFile('product_img')){
            $product_img = $request->file('product_img');
            $filename = time() . '.' . $product_img->getClientOriginalExtension();
            Image::make($product_img)->resize(400,400)->save( public_path('assets/images/img/products/' . $filename ) );

        }

        
        $products = Items::findOrFail($request->id);
        if($request->hasFile('product_img')){

        $products->item_img= $filename;
        }

        $products->name= $request->product_name;
        $products->quantity= $request->quantity;
        $products->description=$request->description;
        $products->price = $request->price;
        $products->save();

        Session::flash('msg','Product updated successfully');
        return redirect('/admin/datatables/productsTable');
    }
    public function edit_order($id){

        $user = Auth::user();
        $orders = Order::findOrFail($id);
        return view('admin.editOrder',['orders'=>$orders])->withUser($user);
    }
     public function update_order(Request $request){

        $users = Auth::user();

        $this->validate($request,
            ['id'=> 'required',
            'is_paid'=> 'required',
             'is_returned'=> 'required',
              'payment_method'=> 'required',
              'status'=>'required',

            ]);
        $orders = Order::findOrFail($request->id);

       // $products->product_img= $filename;
        $orders->is_returned= $request->is_returned;
        $orders->is_paid= $request->is_paid;
        $orders->payment_method=$request->payment_method;
        $orders->status = $request->status;
        $orders->save();

        Session::flash('msg','Order updated successfully');
        return redirect()->back();
    }

     public function restore_hiquip($id){

        $products = Items::withTrashed()->findOrFail($id);
        $products->restore();

        Session::flash('msg','Product successfully Restored');
        return redirect()->back();
    }
    public function disable_hiquip($id){
        $products = Items::findOrFail($id);
        $products->delete();

        Session::flash('msg','Product Disabled');
        return redirect()->back();
    }
    public function delete_hiquip($id){

        $products = Items::onlyTrashed()->findOrFail($id);
        $products->forceDelete();

        Session::flash('msg','Product Permanently Deleted');
        return redirect()->back();
    }


}
