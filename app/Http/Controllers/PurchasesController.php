<?php

namespace App\Http\Controllers;

use App\Product;
use Session;
use App\Account;


use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


         $session_email=  Session::get('email');


         if(isset(Session::get('email')){
          $session_email = Session::get('email');
          }
                   if(isset($session_email)){ 
                    echo '<pre>';
                           print_r($session_email);
                           exit;
          }
        

       // if(isset($_POST['productCard'])){
       //    $proid = $_POST['productCard'];
       //    }
       //             if(isset($proid)){ 
       //              echo '<pre>';
       //                     print_r($proid);
       //                     exit;
       //    }
        


        //  $id= $_POST['productCard'];

        // echo '<pre>';
        //                    print_r($id);
        //                    exit;




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}