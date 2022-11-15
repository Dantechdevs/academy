@extends('layout')
@section('content')

<h1>Student</h1>

<p>list of Student</p>

<table border="1">
    <tr>
        <th>Student Name</th>
        <th>Phone</th>
        <th></th>
    </tr>

 @foreach($students as $student)  
 <tr>
    <td>{{$student->firstname}} {{$student->surname}} </td>
    <td> {{$student->phone}}</td>
    <td>
        <a href="{{route('Students.show',$student->id)}}">View Student</a>
        <a href="">Edit</a>
        <a href="">Delete</a>
    </td>
 </tr>
 
 
 
     
 @endforeach
</table>
@endsection




