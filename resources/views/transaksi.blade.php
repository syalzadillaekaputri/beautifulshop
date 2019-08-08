@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('cart-update')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">Data Transaction
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
                                <th>Date of Transaction</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Proof of Transaction</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><a href="{{url('riwayat-transaksi/detail')}}/{{$item->id}}">#{{$item->tanggal}}</a></td>
                                    <td>{{$item->customer->name}}</td>
                                    <td>{{number_format($item->total)}}</td>
                                    <td><a href="{{asset('storage'.'/'.$item->bukti_image)}}" download="bukti-{{$item->id}}" class="btn btn-sm btn-primary"><i class="fa fa-download"></i></a></td>
                                    <td>
                                        @if ($item->status == 0)
                                            <span class="badge badge-danger">Waiting for Transfer</span>
                                        @elseif ($item->status == 1)
                                            <a href="{{url('konfirmasi')}}/{{$item->id}}" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Confirmed</a>
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
