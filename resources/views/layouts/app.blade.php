<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Beautiful Shop</title>
{{-- 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatable.min.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }</style>
</head>
<body>
    <div id="app">
        @include('layouts.navbar-customer')

        <main class="py-4">
          

            @yield('content')
        </main>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/datatable.min.js')}}"></script>
    <script src="{{asset('js/datatable.b4.min.js')}}"></script>
    <script src="{{asset('fontawesome/js/all.js')}}"></script>
</body>
</html>
