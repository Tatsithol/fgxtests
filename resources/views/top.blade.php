@extends('layout.usermain')

@section('content')





<div class="container">

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif



  
  <h2>Please Top Up your Balance to buy</h2>
  <p>Please be accurate: Once you top up transcation may not be reversed</p>
   <form name='form' method='post' action="{{ action('TopupController@update') }}">
                          @csrf
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" value="{{$userdetail[0]}}">
    </div>

    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" name="email" id="usr" value="{{$userdetail[1]}}">
    </div>

    <div class="form-group">
      <label for="usr">Available Balance:</label>
      <input type="text" class="form-control" id="usr" value="{{$newaccount[1]}}">
    </div>

    


  
<div class="form-group">
      <label for="sel1">Top Amount: Select a top Up Voucher (select one):</label>
      <select class="form-control" id="sel1" name="voucher">
        <option>25</option>
        <option>50</option>
        <option>100</option>
        <option>200</option>
      </select>
      <br>

      <label class="checkbox-inline">
      <input type="checkbox" value="">I Agree and Confirm:
    </label>

    </div>

<div class="thumbnail product-box">

 <p> <input type="submit" class="btn btn-success" name="top" value="Top Up Now"></p>   

</div>
  </form>
</div>
</div>





@endsection

