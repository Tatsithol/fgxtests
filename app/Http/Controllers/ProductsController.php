<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {  

        // @tatsithol retrieve all products
        $products = Product::all();

        // echo '<pre>';
        //                      print_r($products);
        //                      exit;

        return view('welcome', compact('products'));
        

    }

   
    
         
}