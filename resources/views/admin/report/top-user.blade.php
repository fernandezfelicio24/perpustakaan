@extends('admin.templates.default')

@section('content')
@push('data_tables')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
@endpush
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Laporan User Teraktif &nbsp &nbsp</h3>
           
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
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Jumlah Peminjaman</th>
                      <th>Bergabung</th>
                     
                    </tr>
                    </thead>

                    <tbody>
                        @php
                            $page = 1;
                            if (request()->has('page')) {
                                $page = request('page');
                            }
                            $no = (10 * $page)- (10-1);
                         @endphp
                        @foreach ($users as $datauser)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$datauser->name}}</td>
                            <td>{{$datauser->email}}</td>
                          
                            <td>{{$datauser->borrow_count}}</td>
                            {{-- <td>{{ \Carbon\Carbon::parse($datauser['created_at'])->diffForHumans() }}</td> --}}
                            <td>{{$datauser->created_at->diffForHumans()}}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
            </table>
            {{$users->links()}}
        </div>
        
    </div>

    
@endsection
