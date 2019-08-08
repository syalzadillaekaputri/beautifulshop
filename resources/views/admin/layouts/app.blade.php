<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Beautiful Shop</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatable.min.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .nav-link.active{
            color: #fff;
            background-color: #007bff;
        }
        .nav-link:hover{
            color: #fff;
            background-color: #007bff;
        }
        
    </style>
</head>
<body>
    <div id="app">
        @include('admin.layouts.navbar-admin')

        <main class="py-4">
            <div class="row justify-content-center">
                <div class="col-md-3" style="padding-left: 60px;">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{Request::segment(1) == 'admin' ? 'active' : ''}}" href="{{ url('admin') }}">Dashboard</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link {{Request::segment(1) == 'produk' ? 'active' : ''}}" href="{{ url('produk') }}" >Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{Request::segment(1) == 'transaksi' ? 'active' : ''}}" href="{{ url('transaksi') }}">Transaction</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{Request::segment(1) == 'kontak_admin' ? 'active' : ''}}" href="{{ url('kontak_admin') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{Request::segment(1) == 'kontak' ? 'active' : ''}}" href="{{ url('kontak') }}">Criticsm & Suggestion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9"  style="padding-right: 60px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="container">
                
            </div> --}}
        </main>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/datatable.min.js')}}"></script>
    <script src="{{asset('js/datatable.b4.min.js')}}"></script>
    <script src="{{asset('fontawesome/js/all.js')}}"></script>
@stack('scripts')
</body>
</html>
