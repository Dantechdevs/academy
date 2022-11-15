@extends('Layout')
@section('content')

<h1>Class</h1>

<p>List of classes</p>
<table border="1">
    <tr>
        <th></th>
     <th>Class Title</th>
   
    </tr>


    @foreach($classes as $class)
    <tr>
        <td>{{$class->id}}</td>
        <td>{{$class->classtitle}}</td>
    </tr>

    @endforeach
</table>
@endsection

