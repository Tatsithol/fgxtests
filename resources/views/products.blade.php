@extends('layout')

@section('title', 'Products')

@section('content')

    <div class="container products">

        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

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
                                    <a href="#" class="btn btn-success" role="button">Purchase</a>
                                    <a href="#" class="btn btn-primary" role="button">Description</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach     

        </div><!-- End row -->

    </div>

@endsection