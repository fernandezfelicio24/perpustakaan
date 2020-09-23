@extends('admin.templates.default')

@section('content')
@push('data_tables')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
@endpush
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Peminjamana Buku &nbsp &nbsp</h3>
        <a href="{{route('admin.author.create')}}" class="btn btn-primary">Tambah Penulis</a>
           
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
                      <th>Nama</th>
                      <th>Judul Buku</th>
                      <th>Aksi</th>
                   
                    </tr>
                    </thead>
            </table>
        </div>
        
    </div>

    <form action="" method="POST" id="returnForm">
        @csrf
        @method("PUT")
    <input type="submit" value="Return"  style="display: none">
    </form>
@endsection

@push('scripts')
    <script>
       $(function () {
                    $('#dataTable').DataTable({ 
                        responsive: true,
                        processing: true, 
                        serviceSide:true,
                         ajax: '{{ route('admin.borrow.data') }}',
                        columns: [ { data: 'DT_RowIndex', orderable : false, searchable : false},
                                    { data: 'user'},
                                    { data: 'book_title'},
                                    { data: 'action'}
                                    ]
                        });
                    });

    </script>
@endpush
