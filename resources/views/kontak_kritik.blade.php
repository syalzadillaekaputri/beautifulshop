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
        Criticsm & Suggestion<a href="{{ url('kontak/create') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Add Contact</a>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>No Handphone</th>
                    <th>Message </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kontak as $row)
                <tr>
                    <td>{{ isset($i) ? ++$i : $i = 1}}</td>
                    <td>{{ $row->nama}} </td>
                    <td>{{ $row->email}} </td>
                    <td>{{ $row->nohp}} </td>
                    <td>{{ $row->pesan}} </td>
                    <td>
                            <a href="{{ url('/kontak/' . $row->id . '/edit') }}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-edit"></i></a>
                        <form action="{{url('/kontak' , $row->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                            <button type="submit" class="btn btn-sm btn-danger btn-primary"><i class="fa fa-trash"></i></button>
                    </form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</div>
@endsection

