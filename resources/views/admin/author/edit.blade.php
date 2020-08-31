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
              <h3 class="card-title">Edit Data Penulis</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('admin.author.update', $author) }}" method="POST">
                {{ csrf_field() }}
                @method("PUT")
              <div class="card-body">
                <div class="form-group">
                  <label for="nama1">Nama</label>
                <input type="text" name="name" class="form-control" id="nama1" placeholder="Masukan Nama Penulis" value="{{$author->name}}">
                </div>
              
               
              <!-- /.card-body -->

              <div class="card-footer">

                <input type="submit" value="Edit" class="btn btn-primary">
              </div>
            </form>
          </div>
@endsection