<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('assets/img/messenger.svg')}}">
    {{-- Tailwind-CSS --}}
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="icon" href="{{asset('assets/img/messenger.svg')}}">

    @livewireScripts  
    @livewireStyles





</head>
<body>




         
    @yield('content')



    

</body>
</html>