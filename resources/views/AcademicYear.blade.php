@extends('Layout')
@section('content')
<h1>AcademicYear</h1>
<p>AcademicYear</p>

<table border="1">
    <tr>
        <th>AcademicYear</th>
    </tr>


@foreach($AcademicYears as $AcademicYear)
<tr>
<td>{{$AcademicYear->AcademicYear}}</td>
</tr>

@endforeach
</table>
@endsection
