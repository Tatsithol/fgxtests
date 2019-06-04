@extends('layout.usermain')

@section('content')





<div class="container">
<h2>Account: {{$userdetail[0]}}</h2>
  <p><h3>Account transactions and balances</h3></p>  

 


  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Transaction Type</th>
        <th>Transaction Type</th>
        <th>Amount</th>
        <th>Avail Balance</th>
       
      </tr>
    </thead>

    @foreach($trans as $trans)

   

    <tbody>
      <td>{{$trans->created_at}}</td>

      @if($trans->transaction==1)
       <td>Top Up</td>

      @else

      <td></td>

      @endif

      @if($trans->transaction==2)
      <td>Purchase</td>

      @else

      <td></td>

      @endif

      
      <td>{{$trans->amount}}</td>

       <td>{{$trans->balance}}</td>

    </tbody>
     @endforeach





     
  </table>

 

  <form name="trans"  method="get" action="{{action('UserController@index') }}"  >

    @csrf

  <div class="caption">
   
     <input type="submit" class="btn btn-success" name="purchase" value="Back to search"> 
                              
  </div>
  
</form>


</div>



@endsection

</div>
