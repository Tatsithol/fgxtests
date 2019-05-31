<?php

namespace App\Http\Controllers;
use App\Product;
use Session;
use App\User;
use App\Account;
use App\Acc_tran;

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
                        "balance" => $accounts->balance     
                    ];

                    $accounts   =   array_values($accounts); 

                    $balance = $accounts[1];

  
                    $acctrans = Acc_tran::where('user_id', $id)->orderBy('user_id', 'ASC')->paginate(20);

                    foreach ($acctrans as $acctrans => $acctran) {
                        # code...

                        $acctrans = [
                          "date" => $acctran->created_at,
                        "tansaction" => $acctran->transaction,
                        "balance" => $acctran->balance,
                        "amount" => $acctran->amount 

                          ];


                          $newacctran = array_values($acctrans);

                          // $date = $acctran['amount'];

                          // $datec = $date;



                          echo '<pre>';
                           print_r($newacctran);
                           exit;

                    }
                        # code...
                     



        return view('accounts', compact('userdetail','accounts','newacctran'));

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
