@extends('layout')
@section('content')

<h1>Library</h1>
<p>list of books</p>

<table border="1">
   <tr>
       <th>Book title</th>
       <th>Author</th>
       <th>Publisher</th>
       <th>class</th>
       <th></th>
   </tr>

    @foreach($Libraries as $Library)
    <tr>
        <td>{{$Library->Booktitle}}</td> 
        <td>{{$Library->Author}}</td>
        <td>{{$Library->publisher}}</td>
        <td>{{$Library->class}}</td>
        <td>
            <a href="{{route('Library.show',$Library->id)}}">View Library</a>
            <a href="">Add</a>
            <a href="">Delete</a>
        </td>
     </tr>

    @endforeach
    </table>
    @endsection