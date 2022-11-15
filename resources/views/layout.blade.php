<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Academy</title>
</head>
<body>
    <div class="topbar">
        <h1 style="color: blue">
            <img src="logo.png" style="height: 120px; width:120px">
            Eagles Academy</h1> 
    </div>
      
      <div class="nav">
        <a href="{{route('index')}}">Home</a>
        <a href="{{route('Teachers.index')}}">Teachers</a>
        <a href="{{route('Class.index')}}">Classes</a>
        <a href="{{route('Library.index')}}">Library</a>
        <a href="{{route('Students.index')}}">Student</a>
        <a href="{{route('Term.index')}}">Term</a>
        <a href="{{route('AcademicYear.index')}}">AcademicYear</a>
        <a href="{{route('Customer.index')}}">Customer</a>
        <a href="{{route('Parents.index')}}">Parents</a>
        <a href="{{route('Fees.index')}}">Fees</a>
   </div>
  <div class="content">
@yield('content')
    
</div>
</body>
</html>