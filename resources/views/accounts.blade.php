@extends('layout.usermain')

@section('content')





<div class="container">
<h2>Account: {{$userdetail[0]}}</h2>
  <p><h3>Account transactions and balances</h3></p>  

 


  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>balance</th>
        <th>Avail Balance</th>
       
      </tr>
    </thead>
    <tbody>
      <td>{{$accounts[2]}}</td> 
      <td>{{$accounts[1]}}</td>
      <td>{{$accounts[1]}}</td>
      




    </tbody>



     
  </table>

  <form name="trans"  method="get" action="{{action('TransactionController@index') }}"  >

    @csrf

  <div class="caption">
   
     <input type="submit" class="btn btn-success" name="purchase" value="Transactions"> 
                              
  </div>
  
</form>


</div>



@endsection

</div>

