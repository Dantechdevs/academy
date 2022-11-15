@extends('layout')
@section('content')
<h1>Terms</h1>
<p>List of terms</p>
<table border="1">
<tr>
    <th>term description</th>

</tr>
@foreach($terms as $term)
<tr>
    <td>{{$term->Termdescription}}</td>
    <tr>
     
        @endforeach
    </table>

    @endsection
    