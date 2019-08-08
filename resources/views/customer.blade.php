@extends('layouts.app_customer')

@section('content')
<div class="card">
    <div class="card-header">
            Hello, {{ Auth::user()->name}}
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        
    </div>
    <center>Happy Shopping!</center>
    <br>
</div>
@endsection
