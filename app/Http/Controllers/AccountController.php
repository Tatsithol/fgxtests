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


                    // $acctrans = Acc_tran::find(4);


                    $acctrans = Acc_tran::where('acc_tran.user_id', $id);
                    //                            ->with('updated_at')
                    //                            ->with('transaction')
                    //                             ->with('amount')
                    //                            ->with('balance')
                    //                                 ->get()->all();

                     $acctrans = [
                         "date" => $acctrans->updated_at,
                        "tansaction" => $acctrans->transaction,
                        "balance" => $acctrans->balance,
                        "amount" => $acctrans->amount 

                          ];

              // $acctrans = Acc_tran::
              //           ->whereExists(function ($query) {
              //                $query->select(DB::raw(1))
              //                  ->from('orders')
              //                   ->whereRaw('Acc_tran.user_id = users.id');
            // })
            // ->get();

         echo '<pre>';
                           print_r($acctrans);
                           exit;







        return view('accounts', compact('userdetail','accounts'));

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
