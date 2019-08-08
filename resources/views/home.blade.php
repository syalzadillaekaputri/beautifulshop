@extends('layouts.app_customer')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($produk as $p)
        <div class="col-md-3 p-3" style="overflow:hidden">
            <div class="card">
            <img class="card-img-top" src="{{$p->image != null ? asset('storage'.'/'.$p->image) : asset('img/default.jpg')}}" alt="{{$p->nama_produk}}">
            <div class="card-body">
                <h5 class="card-title">{{$p->nama_produk}}</h5>
            <p class="card-text">Rp {{number_format($p->harga_produk,2)}}</p>
                <a href="{{url('add-cart')}}/{{$p->id}}" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a>
            </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-12">
            {{$produk->links()}}
        </div>
    </div>
</div>
@endsection
