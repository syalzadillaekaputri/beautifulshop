@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('cart-update')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">Transaction History
                    <a href="{{url('home')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><a href="{{url('riwayat-transaksi/detail')}}/{{$item->id}}">#{{$item->tanggal}}</a></td>
                                    <td>{{number_format($item->total)}}</td>
                                    <td>
                                        @if ($item->status == 0)
                                            <a href="{{url('bayar')}}/{{$item->id}}" class="btn btn-sm btn-success"><i class="fa fa-money"></i> Bayar</a>
                                        @elseif ($item->status == 1)
                                            <span class="badge badge-success">Waiting for confirmation</span>
                                        @elseif ($item->status == 2)
                                            <span class="badge badge-success">Success</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
