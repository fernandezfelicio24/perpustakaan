@extends('admin.templates.default')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Penulis</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('admin.author.store') }}" method="POST">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                  <label for="nama1">Nama</label>
                  <input type="text" name="name" class="form-control" id="nama1" placeholder="Masukan Nama Penulis">
                </div>
              
               
              <!-- /.card-body -->

              <div class="card-footer">

                <input type="submit" value="Tambah" class="btn btn-primary">
              </div>
            </form>
          </div>
@endsection