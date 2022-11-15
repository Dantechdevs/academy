@extends('layout')
@section('content')

<h1>Fees</h1>
<p>Fees Payment</p>

<table border="1">
   <tr>
       <th>Fees Structure</th>
       <th>Fees Account</th>
       <th>Fees Balance</th>
       <th>Fees Statement</th>
       <th>Fees Payment</th>
       <th></th>
   </tr>

    @foreach($fees as $fee)
    <tr>
        <td>{{$fees->Structure}}</td> 
        <td>{{$fees->Account}}</td>
        <td>{{$fees->Balance}}</td>
        <td>{{$fees->Statement}}</td>
        <td>{{$fees->Payment}}</td>
        <td>
            <a href="{{route('Fees.show',$Fee->id)
            <a href="">Add</a>
            <a href="">Delete</a>
        </td>
     </tr>

    @endforeach
    </table>
    @endsection