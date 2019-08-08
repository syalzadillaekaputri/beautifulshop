@extends('admin.layouts.app')
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.table').DataTable();
        });
    </script>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
        Data Product
        <a href="{{ url('produk/create') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Add Product</a> 
    </div>
    <div class="card-body">
        <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Desc</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $row)
                    <tr>
                        <td>{{ isset($i) ? ++$i : $i = 1}}</td>
                        <td>
                        <img src="{{asset('storage'.'/'.$row->image)}}" alt="" style="width:50px">
                        </td>
                        <td>{{ $row->nama_produk}} </td>
                        <td>{{ $row->harga_produk}} </td>
                        <td>{{ $row->jumlah_produk}} </td>
                        <td>{{ $row->keterangan_produk}} </td>
                        <td>
                                <a href="{{ url('/produk/' . $row->id . '/edit') }}" class="btn btn-sm btn-primary mb-2"> <i class="fa fa-edit"></i>  </a>
                            <form action="{{url('/produk' , $row->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
            
    </div>
</div>
@endsection

