@extends('admin.templates.default')

@section('content')
  
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Penulis</h3>
           
        </div>
        <div class="car-body">
            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      
                    </tr>
                    </thead>
            </table>
        </div>
        
    </div>
@endsection

@push('scripts')
    <script>
       $(function () {
                    $('#dataTable').DataTable({ 
                        processing: true, 
                        serviceSide:true,
                         ajax: '{{ route('admin.author.data') }}',
                        columns: [ { data: 'id'},
                                    { data: 'name'}
                                    ]
                        });
                    });

    </script>
@endpush
