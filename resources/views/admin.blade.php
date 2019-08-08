@extends('admin.layouts.app')

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
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary"><i class="fa fa-box"></i> Product</div>
                    <div class="card-body">
                        <h3>{{$produk}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning"><i class="fa fa-users"></i> Customer</div>
                    <div class="card-body">
                        <h3>{{$customer}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success"><i class="fa fa-exchange-alt"></i> Transaction</div>
                    <div class="card-body">
                        <h3>{{$transaksi}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
