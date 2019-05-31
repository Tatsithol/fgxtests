<?php

namespace App\Http\Controllers;

use Session;
use App\Account;
use App\User;
use App\Acc_tran;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // @tatsithol top up account
          $user = Auth::user();

          $id = Auth::id();



        $userdetails = User::find($id);

        $userdetails = [
                        "name" => $userdetails->name,
                        "email" => $userdetails->email
                          ];
        $userdetail   =   array_values($userdetails);

        $email = $userdetail[1];

        $accounts = Account::find(1)->where('email',  $email)->first();

           $accounts = [
                        "email" => $accounts->email,
                        "balance" => $accounts->balance     
                    ];

              $newaccount   =   array_values($accounts);




         // echo '<pre>';
         //                     print_r($newaccount);
         //                     exit;

        return view('top', compact('userdetail', 'newaccount'));                     
       }

     

    
    public function create(){}
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
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
    public function update()
    {
        //@tatsithol update balance
        
        //
        $user = Auth::user();

          $id = Auth::id();

        if(isset($_POST['email'])){
                $topbalance = $_POST['voucher']; 

                 
                $email = $_POST['email'];


        $accounts = Account::find(1)->where('email',  $email)->first();

           $accounts = [
                        "email" => $accounts->email,
                        "balance" => $accounts->balance     
                    ];

              $newaccount   =   array_values($accounts);

             



               $balance =  $topbalance +  $newaccount[1];

                 // echo '<pre>';
                 //             print_r($balance);
                 //             exit;

          $trans = 1;

              Acc_tran::insert(
            ['user_id' => $id, 'transaction' => $trans,
              'amount' => $topbalance, 'balance' => $balance,
              'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s') ]   );

                $update = Account::find(1)
                   ->where('email', $email)
                      ->update(['balance' => $balance ]);

                    
               }

            return redirect()->route('userhome');
       

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
