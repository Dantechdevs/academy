@extends('layout')
@section('content')

<h1>Customer</h1>
<p>Customers Orders</p>

<table border="1">
   <tr>
       <th>Customer ID</th>
       <th>Customer Name</th>
       <th>Address</th>
       <th>City</th>
       <th>Country</th>
       <th></th>
   </tr>

    @foreach($Customers as $Customer)
    <tr>
        <td>{{$Customer->customerID}}</td> 
        <td>{{$Customer->CustomerName}}</td>
        <td>{{$Customer->Address}}</td>
        <td>{{$Customer->City}}</td>
        <td>{{$Customer->Country}}

        <td>
            <a href="{{route('Customer.show',$Customer->id)}}">View Customer</a>
            <a href="">Add</a>
            <a href="">Delete</a>
        </td>
     </tr>

    @endforeach
    </table>
    @endsection