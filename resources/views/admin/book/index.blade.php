@extends('admin.templates.default')

@section('content')
@push('data_tables')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
@endpush
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Penulis &nbsp &nbsp</h3>
        <a href="{{route('admin.book.create')}}" class="btn btn-primary">Tambah Buku</a>
           
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
                      <th>Penulis</th>
                      <th>Sampul</th>
                      <th>Aksi</th>
                   
                    </tr>
                    </thead>
            </table>
        </div>
        
    </div>

    <form action="" method="POST" id="deleteForm">
        @csrf
        @method("DELETE")
    <input type="submit" value="Hapus"  style="display: none">
    </form>
@endsection

@push('scripts')

    <script>
       $(function () {
                    $('#dataTable').DataTable({ 
                        responsive: true,
                        processing: true, 
                        serviceSide:true,
                         ajax: '{{ route('admin.book.data') }}',
                        columns: [ { data: 'DT_RowIndex', orderable : false, searchable : false},
                                    { data: 'title'},
                                    { data: 'description'},
                                    { data: 'qty'},
                                     { data: 'author'},
                                     { data: 'cover'},
                                     { data: 'action'},
                                    ]
                        });
                    });

    </script>
@endpush
