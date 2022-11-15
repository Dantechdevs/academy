@extends('layout')
@section('content')
<h1>Teachers</h1>

<p>List of Teachers</p>
<table border="1">
    <tr>
        <th>Teacher Name</th>
        <th>TSC NO</th>
        <th>ID NO</th>
    </tr>
@foreach ($teachers as $teacher)
<tr>
        <td>{{$teacher->firstname}} {{$teacher->surname}}</td>
        <td>{{$teacher->tscno}}</td>
        <td>{{$teacher->idno}}</td>
</tr>
    
@endforeach
</table>

@endsection