@extends('layout.main')

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
         @foreach($products as $product)

            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="{{ $product->photo }}" alt="" />
                            <div class="caption">
                                <h3>{{ $product->name }}</h3>
                                <p>Price : <strong>${{ $product->price }}</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p>{{ str_limit(strtolower($product->description), 50) }}   </p>
                                <p>
                                    <a href="{{ route('userhome') }}" class="btn btn-success" role="button">Purchase</a>
                                    <a href="#" class="btn btn-primary" role="button">Description</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach     
                    <!-- /.col -->
                    
                 </div>
             </div>
             @endsection
                

<!-- @tatsithol end -->


