@extends('admin.templates.default')

@section('content')
@push('data_tables')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
@endpush
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Laporan Buku Terlaris &nbsp &nbsp</h3>
           
        </div>
        <div class="car-body">
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
             @if (session('info'))
                <div class="alert alert-info">{{session('info')}}</div>
            @endif
            @if (session('danger'))
                <div class="alert alert-danger">{{session('danger')}}</div>
            @endif

            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Jumlah Buku</th>
                      <th>Total Dipinjam</th>
                      <th>Penulis</th>
                      <th>Sampul</th>
                  
                   
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($books as $databook)
                        <tr>
                            <td></td>
                            <td>{{$databook->title}}</td>
                            <td>{{$databook->description}}</td>
                            <td>{{$databook->qty}}</td>
                            <td>{{$databook->borrowed_count}}</td>
                            <td>{{$databook->author->name}}</td>
                            
                            <td>
                            <img src="{{$databook->getCover()}}" height="150px" alt="{{$databook->title}}">
                            </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
            </table>
            {{$books->links()}}
        </div>
        
    </div>

    
@endsection
