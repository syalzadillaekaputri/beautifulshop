@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Produk
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if(session('error'))
        <div class="alert alert-error">
          {{ session('error')}}
        </div>
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Perhatian</strong>
          <br />
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="{{ url('/produk', @$produk->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          
          @if(!empty($produk))
              @method('PATCH')
          @endif
            <div class="form-group">
              <label >Name : </label>
              <input class="form-control" type="text" name="nama_produk" value="{{ old('nama_produk', @$produk->nama_produk) }}"/>
            </div>
            <div class="form-group">
              <label >Price :  </label>
              <input class="form-control" type="text" name="harga_produk" value="{{ old('harga_produk', @$produk->harga_produk) }}"/> 
            </div>
            <div class="form-group">
              <label >Qty : </label>
              <input class="form-control" type="text" name="jumlah_produk" value="{{ old('jumlah_produk', @$produk->jumlah_produk) }}"/>
            </div>
            <div class="form-group">
              <label >Desc : </label>
              <input class="form-control" type="text" name="keterangan_produk" value="{{ old('keterangan_produk', @$produk->keterangan_produk) }}"/>     
            </div>
            <div class="form-group">
              <label >Picture : </label>
              <input class="form-control" type="file" name="image" value="{{ old('image', @$produk->image) }}"/>     
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        
          </form>
          
  <a href="{{ url('produk') }}" class="btn btn-primary float-right">
      Back
     </a>  
    </div>
    <div>
  
  <br>            
</div>
@endsection
