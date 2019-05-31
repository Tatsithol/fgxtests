@extends('layout.usermain')

@section('content')





<div class="container">
<h2>Account: {{$userdetail[0]}}</h2>
  <p><h3>Account transactions and balances</h3></p>  

 


  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>transaction</th>
        <th>amount</th>
        <th>balance</th>
      </tr>
    </thead>

     @foreach($acctran as $acctran)
    <tbody>
      <tr>
        <td>{{$acctran[1]}}</td>
        <td>{{$acctran[1]}}</td>
        <td>{{$acctran[2]}}</td>
        td>{{$acctran[3]}}</td>
      </tr>
      
    </tbody>
    @foreach
  </table>
  



</div>


@endsection

