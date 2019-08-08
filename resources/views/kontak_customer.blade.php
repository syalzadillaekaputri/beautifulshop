@extends('layouts.app_customer')

@section('content')
<div class="card">
    <div class="card-header">
        Contact Us
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
                        <th><center>No</center></th>
                        <th><center>Nama</center> </th>
                        <th><center>Email</center> </th>
                        <th><center>No HP</center> </th>
                    </tr>
                    <tr>
                        <td>{{ isset($i) ? ++$i : $i = 1}}</td>
                        <td>Syalza Dilla Eka Putri</td>
                        <td>ekaputrisyalzadilla@gmail.com</td>
                        <td>081383061294</td>
                    </tr>
                    <tr>
                        <td>{{ isset($i) ? ++$i : $i = 1}}</td>
                        <td>Syifa Anida Sholihat</td>
                        <td>syifa.anida98@gmail.com</td>
                        <td>089625214518</td>
                    </tr>
            </tbody>
        </table>
    </div> 
</div>
@endsection

