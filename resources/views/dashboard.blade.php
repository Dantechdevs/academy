@extends('layout')
@section('content')
    
<h1 style="text-decoration: underline">Dashboard</h1>

  <h2>List of our classes</h2>
   <ol>
    @foreach ($grades as $grade)
      <li>{{$grade}}</li>  
    @endforeach
   </ol> 
    @php
      echo 'Hello';  
    @endphp
   <h2>Our Teachers</h2>
    <ol>
        @foreach ($teachers as $teacher)
            <li>{{$teacher}}</li>
        @endforeach
    </ol>

@endsection