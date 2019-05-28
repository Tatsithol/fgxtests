<?php


namespace App\Http\Controllers;

use App\Product;
use Session;
use App\User;
use App\Account;

use Illuminate\Http\Request;



class PurchaseController extends Controller

{
    //


    public function index(Request $request)
    {  
 
        // @tatsithol retrieve all products

      session_start();

       $session_user = $request->session()->all();
      $user_id = array_values($session_user);
        $id  = $user_id[3];

         
        if (!isset($id))
         {
            return view('home');
            exit;
        }

      
          $proid = $_POST['productCard'];

          if(!isset($proid)){ 

            echo "Something didnt work right";
   
          return view('welcome');

          }
                   
        
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

              $newaccount   =   array_values($accounts); 

            // @tatsihtol get product by id.......

               $product = Product::find($proid);

               $product = [
                        "id" => $product->id,
                        "name" => $product->name,
                        "description" => $product->description,
                        "photo" => $product->photo,
                        "price" => $product->price
                          ];

               $newproduct =   array_values($product); 



               // tatsithol calculate percentage

            $price = $newproduct[4];

             if (($price < 100)  && ($price > 50)) {
               # code...

                  $percentage = 0;
                  $disc = 100;
             }

             if (($price < 155)  && ($price > 112)) {
               # code...

                  $percentage = 25;
                  $disc = 75;
             }

             if (($price > 200)  ) {
               # code...

                  $percentage = 50;
                  $disc = 50;
             } else {

                  $percentage = "NO DISCOUNT";
                  $disc = 100;

             }

             $discounts = $price *  $disc;

             $discount =  $discounts/100;


             $discount = number_format((float)$discount, 2, '.', '');

               
               // echo '<pre>';
               //             print_r($newproduct);
               //             exit;
                        
               return view('purchase', compact('newaccount', 'newproduct','percentage', 'discount'));
                  
}






    public function purchase()
    {     


    }
}
