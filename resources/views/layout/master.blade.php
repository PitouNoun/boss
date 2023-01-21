<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">   
   @include('layout.header')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   @if(Request::is('home'))
        <link rel="stylesheet" href="{{ asset('/assests/')}}//css/style.css">
   @endif
   @if(Request::is('about'))
        <link rel="stylesheet" href="{{ asset('/assests/')}}//css/style.css">
   @endif
   @if(Request::is('class'))
        <link rel="stylesheet" href="{{ asset('/assests/')}}//css/style.css">
   @endif
   @if(Request::is('blog'))
        <link rel="stylesheet" href="{{ asset('/assests/')}}//css/style.css">
   @endif
   @if(Request::is('gallery'))
        <link rel="stylesheet" href="{{ asset('/assests/')}}//css/style.css">
   @endif
   @if(Request::is('single'))
        <link rel="stylesheet" href="{{ asset('/assests/')}}//css/style.css">
   @endif
   @if(Request::is('team'))
        <link rel="stylesheet" href="{{ asset('/assests/')}}//css/style.css">
   @endif
    @if(Request::is('contact'))
        <link rel="stylesheet" href="{{ asset('/assests/')}}//css/style.css">
   @endif
   @if(Request::is('enrollment') || Request::is('/') || Request::is('form') || Request::is('studentList'))
        <link rel="stylesheet" href="{{ asset('css/styleenrollment.css') }}">
   @endif
   @if(Request::is('contact') || Request::is('/') || Request::is('form') || Request::is('messageList'))
        <link rel="stylesheet" href="{{ asset('css/styleenrollment.css') }}">
   @endif
</head>
<body>
    @yield("content")
    <!-- JavaScript Bundle with Popper -->
<script src="{{ asset('/assests/')}}//https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>