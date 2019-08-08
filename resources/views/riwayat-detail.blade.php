@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('cart-update')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">Transaction History
                    <a href="{{url('transaksi')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body"> 
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->produk->nama_produk}}</td>
                                <td>{{number_format($item->produk->harga_produk)}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{number_format($item->produk->harga_produk*$item->qty)}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4">Total</td>
                                <td>{{number_format($transaksi->total)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
