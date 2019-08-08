@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
      Kontak
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
        <form action="{{ url('/kontak', @$kontak->id) }}" method="POST">
          @csrf
          
          @if(!empty($kontak))
              @method('PATCH')
          @endif
            <div class="form-group">
              <label >Name : </label>
              <input class="form-control" type="text" name="nama" value="{{ old('nama', @$kontak->nama) }}"/>
            </div>
            <div class="form-group">
              <label >E-mail :  </label>
              <input class="form-control" type="text" name="email" value="{{ old('email', @$kontak->email) }}"/> 
            </div>
            <div class="form-group">
              <label >No Handphone : </label>
              <input class="form-control" type="text" name="nohp" value="{{ old('nohp', @$kontak->nohp) }}"/>
            </div>
            <div class="form-group">
              <label >Message : </label>
              <input class="form-control" type="text" name="pesan" value="{{ old('pesan', @$kontak->pesan) }}"/>     
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
          </form>
          <br>
           <a href="{{ url('kontak') }}" class="btn btn-primary float-right"><i class="fa fa-arrow-left"></i> Back
          </a>
    </div>
        
          
</div>
@endsection