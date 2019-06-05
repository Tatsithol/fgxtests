<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Account;

use App\Productdiscounts;

use App\Acc_tran;

use Session;

use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        $user = Auth::user();

          $id = Auth::id();


          $userdetails = User::find($id);

          $userdetails = [
                        "name" => $userdetails->name,
                        "email" => $userdetails->email
                          ];


           

            $userdetail   =   array_values($userdetails);              

           $users   =   $userdetail[1]; 

           $accounts = Account::find(1)->where('email', $users)->first();

           $accounts = [
                        "email" => $accounts->email,
                        "balance" => $accounts->balance     
                    ];

                    $accounts   =   array_values($accounts); 

                    $balance = $accounts[1];

              // $amount = $_POST['toping'];

              // echo '<pre>';
              //              print_r($amount);
              //              exit;

              
   

              if(isset($_POST['cost'])){
                $amount = $_POST['cost'];

            $newbalance = $balance - $amount;  

        }

               else{

             $newbalance = $balance ;


               }  
               

               $trans = 2;


               $update = Account::find(1)
                   ->where('email', $users)
                      ->update(['balance' => $newbalance ]);



               
         // echo '<pre>';
         //                   print_r($amount);
         //                   exit;
   
        Acc_tran::insert(
            ['user_id' => $id, 'transaction' => $trans,
              'amount' => $amount , 'balance' => $newbalance,
              'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s') ]   );



       Session::flash('success', 'Your transaction of payment of $'.$amount. ' was successfull. Your new balance is $'.$newbalance. '. You can continue shopping now!!');
  

        return redirect()->route('userhome');
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
     * @param  int  $
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // @tatsithol update

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
