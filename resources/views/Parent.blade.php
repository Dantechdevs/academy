@extends('layout')
@section('content')

<h1>Parents</h1>

<p>Parents</p>

<table border="1">
    <tr>
        <th>Parent ID</th>
        <th>Gender</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Contact</th>
        <th>Student Registration</th>
        <th></th>
    </tr>

 @foreach($Parents as $Parent)  
 <tr>
    <td>{{$Parent->ParentID}}</td>
    <td>{{$Parent->Gender}}</td>
    <td>{{$Parent->FirstName}} {{$Parent->MiddleName}} {{$Parent->LastName}}</td>
    <td> {{$Parent->Contact}}</td>
    <td>{{$Parent->StudentRegistration}}</td>
    <td>
        <a href="{{route('Parents.show',$Parent->id)}}">View Parent</a>
        <a href="">Edit</a>
        <a href="">Delete</a>
    </td>
 </tr>
 
 