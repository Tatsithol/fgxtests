<?php

namespace App\Http\Controllers;
use App\Product;
use Session;
use App\User;
use App\Account;
use App\Acc_tran;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        // @tatsithol retrieve all accbdetails
          $user = Auth::user();

          $id = Auth::id();

          $userdetails = User::find($id);

        $userdetails = [
                        "name" => $userdetails->name,
                        "email" => $userdetails->email
                          ];
        $userdetail   =   array_values($userdetails);

        $email = $userdetail[1];

           $accounts = Account::find(1)->where('email', $email)->first();

           $accounts = [
                        "email" => $accounts->email,
                        "balance" => $accounts->balance,
                        "dt"        => Carbon::now()

                    ];

                    $accounts   =   array_values($accounts); 

                   
                    //     // code...

                    // echo '<pre>';
                    //        print_r($accounts);
                    //        exit;


        return View('accounts')

                   ->with(compact('userdetail'))

                          ->with(compact('accounts'));

                             

    }

    /**
     * Show the form for creating a new resource.
     *
     // * @return \Illuminate\Http\Response
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
