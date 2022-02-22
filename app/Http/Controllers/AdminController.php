<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class AdminController extends Controller
{
    
    public function __construct()
    {
         $this->middleware(['auth','role:administrator']);
    }
    public function index(){

        return view('home');
    }
}
