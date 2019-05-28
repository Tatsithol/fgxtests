<?php

namespace App\Http\Controllers;
use App\Product;
use App\Pricediscounts;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        


        $products = Product::all();

        return view('userhome', compact('products'));
        
    
}
}

