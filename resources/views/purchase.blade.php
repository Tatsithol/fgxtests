@extends('layout.usermain')

@section('content')

                               

<!-- @tatsithol start inner section changing -->

      <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center">


                   Today's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;50 % off  on purchase of $ 2 00 and above till 24 dec !                
              
               
                </div>
        </div>

        <!-- this is a section @tatsithol get all data from products--> 
        <div class="row">
  

            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="{{$newproduct[3]}}" alt="" />
                            <div class="caption">
                                <h3>{{$newproduct[1]}}</h3>
                                
                                
                               
                            </div>
                        </div>
                    </div>

                   






                
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
               
                                <h3>Price :          <strong>${{$newproduct[4]}}</h3>

                                <h4>Percentage Discount : <strong>{{$percentage}}</h4>

                                <h4>Discount price :<strong>${{$discount}}</h4>

                                <h3>Avail Balance :    <strong>${{$newaccount[1]}}</strong></h3>



                                @if ($newaccount[1] < $discount)

                                 <p>     <a class="btn btn-success" role="button" data-toggle="modal" data-target="#myModal">Pay Now</a> </p> 

                                 @else

                                 <p>     <a class="btn btn-success" role="button" data-toggle="modal" data-target="#payModal">Pay Now</a> </p>

                                 @endif

                                
                            </div>
                           </div>
                                         



                         <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
               
                                <h3>Cost Price :        <strong>${{$discount}}</h3>

                               <h4>{{ str_limit(strtolower($newproduct[1]), 200) }}   <h4>
                             <p>     <a href="{{ route('userhome') }}" class="btn btn-success" role="button">Back to Search</a> </p>   

                                
                            </div>
                        </div>

                          <!-- @tatsithol the pay modal -->


                          <!-- end the pay modal -->




                    </div>
                    
                 </div>

                    
                 </div>

            

             </div>
             @endsection
                

         

    <input type="text" name="productCard" id="productCard"  style="display: none;" value={{$discount}}><br/>
                
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tat Shop</h4>
        </div>
        <div class="modal-body">
          <p>Your Account Balance is less than the Cost Price<br>Please <strong>  TOP UP  </strong> <br><h3>Avail Balance :   <strong>${{$newaccount[1]}}</strong></h3></p>

         <p> <h3>Cost Price :   <strong>${{$discount}}</strong></h3></p> 


        </div>
        <div class="modal-footer">
         
       <a href="{{ route('userhome') }}"" role="button"  class="btn btn-default" data-dismiss="modal">Close</a>
      

         <a href="{{ route('top') }}" class="btn btn-success" >Top Up</a>   

      </div>


    

      
    </div>
    
  </div>
  
</div>

<!-- @tatsithol pay modal -->

 <div class="modal fade" id="payModal" role="dialog">
    <div class="modal-dialog">

      <form method="post" action="{{ action('SaleController@create') }}" name="money">
     @csrf
        
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tat Shop</h4>
        </div>
        <div class="modal-body">
          <p><h3>Please carefully check all details: Transaction is non reversable</h3></p>

         <h3>Product           :<strong>{{$newproduct[1]}}</strong></h3>

         <h3>Discount price : <strong>${{$discount}}</h3>

         <h3>Avail Balance   : <strong>${{$newaccount[1]}}</strong></h3>   


        </div>
        <div class="modal-footer">

         <input type="text" name="cost"  value="{{$discount}}" style="display: none;">

          
         
       <a href="{{ route('userhome') }}" role="button"  class="btn btn-default" data-dismiss="modal">Close</a>
      

       <a> <input type="submit" class="btn btn-success" name="top" value="Pay Now"> </a>

      </div>


    

      
    </div>

  </form>
    
  </div>
  
</div>

<!-- @tatsithol purchase modal -->

<div class="modal fade" id="pay" role="dialog">
    <div class="modal-dialog">

        
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tat Shop</h4>
        </div>
        <div class="modal-body">
          <p><h3>Please carefully check all details: Transaction is non reversable</h3></p>

         <h3>Product           :<strong>{{$newproduct[1]}}</strong></h3>

         <h3>Discount price : <strong>${{$discount}}</h3>

         <h3>Avail Balance   : <strong>${{$newaccount[1]}}</strong></h3>   
        </div>
        <div class="modal-footer">
         
       <a href="{{ route('userhome') }}"" role="button"  class="btn btn-default" data-dismiss="modal">Close</a>
      

       <a href="{{ route('top') }}" class="btn btn-success" >Pay</a>   

      </div>


    

      
    </div>
    
  </div>
  
</div>





<!-- @tatsithol end modal -->

                                  





        