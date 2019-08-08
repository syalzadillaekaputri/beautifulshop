@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <form action="{{url('produk')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header"><a href="{{ url('shop') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-update"></i> Update Cart</a>
                </div>
                <div class="card-body">
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error')}}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Picture</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th width="15%">Qty</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($cart as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{$item->image != null ? asset('storage'.'/'.$item->image) : asset('img/default.jpg')}}" alt="" style="width:50px"></td>
                                    <td>{{$item->produk->nama_produk}}</td>
                                    <td>{{number_format($item->produk->harga_produk)}}</td>
                                    <td><input type="number" name="qty[{{$item->id}}]" value="{{$item->qty}}" class="form-control"></td>
                                    <td>{{number_format($item->produk->harga_produk*$item->qty)}}</td>
                                </tr>
                                @php
                                    $total += $item->produk->harga_produk*$item->qty;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </form>
        </div>
        <div class="col-md-4">
            <form action="{{url('checkout')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">Summary</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="text" name="total" id="total" class="form-control text-right" value="{{number_format($total)}}" readonly>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right">Checkout</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
