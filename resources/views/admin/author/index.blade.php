@extends('admin.templates.default')

@section('content')
  
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Penulis &nbsp &nbsp</h3>
        <a href="{{route('admin.author.create')}}" class="btn btn-primary">Tambah Penulis</a>
           
        </div>
        <div class="car-body">
            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Action</th>
                   
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
                        processing: true, 
                        serviceSide:true,
                         ajax: '{{ route('admin.author.data') }}',
                        columns: [ { data: 'DT_RowIndex', orderable : false, searchable : false},
                                    { data: 'name'},
                                    { data: 'action'}
                                    ]
                        });
                    });

    </script>
@endpush
