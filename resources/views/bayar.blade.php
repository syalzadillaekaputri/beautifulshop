@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Payment Confirmation 
                </div>
                <div class="card-body"> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <h5>Payment via BNI account </h5>
                                    <h3> <strong>10517702</strong> </h3>
                                    <h5>an Chae Ipot</h5>
                                </div>
                                <div class="col-md-4">
                                        <h5>Total : </h5>
                                        <h1 class="text-danger">Rp {{number_format($transaksi->total)}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">Upload Payment Confirmation 
                    <a href="{{url('riwayat-transaksi_customer')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body"> 
                    <div class="row">
                        <div class="col-md-6">
                        <form action="{{url('upload-bukti')}}/{{$transaksi->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file">Upload Bukti Transfer</label>
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
