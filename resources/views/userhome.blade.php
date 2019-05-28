@extends('layout.usermain')

@section('content')

<!-- @tatsithol start inner section changing -->

      <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center">


                   Today's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;40 % off  on purchase of $ 2,000 and above till 24 dec !                
              
               
                </div>
        </div>

        <!-- this is a section @tatsithol get all data from products-->


        <div class="row">
         @foreach($products as $products)

         

            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                         <form name='form' method='post' action="{{ action('PurchaseController@index') }}">
                          @csrf

                             <input type="text" name="productCard" id="productCard" style="display: none;" value={{ $products->id}} ><br/>

                             <!--  -->
                             <img src="{{ $products->photo }}" alt="" />
                            <div class="caption">
                                <h3>{{ $products->name }}</h3>
                                <p>Price : <strong>${{ $products->price }}</strong>  </p>
                                
                                <p>{{ str_limit(strtolower($products->description), 50) }}   </p>
                                <!-- <p>  <a href="" class="btn btn-success" role="button">Purchase</a> -->

                                    <p>

                                   <input type="submit" class="btn btn-success" name="purchase" value="Buy"> 
                                    
                                </p>
                            </div>
                          </form>
                        </div>
                    </div>

                @endforeach     
                    <!-- /.col -->
                    </div>
                 </div>
             </div>
             @endsection
                

<!-- @tatsithol end -->


