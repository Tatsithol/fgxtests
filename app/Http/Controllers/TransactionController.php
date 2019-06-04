<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\Account;
use App\Acc_tran;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // @tatsithol retrieve all accdetails
          $user = Auth::user();

          $id = Auth::id();

          $userdetails = User::find($id);

        $userdetails = [
                        "name" => $userdetails->name,
                        "email" => $userdetails->email
                          ];
        $userdetail   =   array_values($userdetails);

        $trans  = Acc_tran::where('user_id', $id)->orderBy('user_id', 'ASC')->paginate(30);



        // foreach ($trans as $trans) {
            
        // $trans = [
        //                 "balance" => $trans->balance,
        //                 "amount" => $trans->amount,
        //                 "created_at" => date($trans->created_at),
        //                 "transaction" => $trans->transaction

        //                   ];

        //     $trans   =   array_values($trans);

            



    // }
                    // echo '<pre>';
                    //        print_r($trans);
                    //        exit;

        

    return View('acctrans')

                   ->with(compact('userdetail'))

                    ->with(compact('trans'));     
                    
                   
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
