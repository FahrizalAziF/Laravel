@extends('layout/admin/main')

@section('isi')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-trophy "></i> Data Diri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
        <button class="btn btn-success " type="button" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Profile</button>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <img src="/uploads/{{$profile->image}}" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title mb-2"><b>Deskripsi</b></h5>
                  <p class="card-text">
                      {{$profile->description}}
                  </p>
                  <hr>
              </div>
              <div class="card-footer">
                <a class="btn btn-info" href="/admin/profile/{{$profile->id}}/edit">Edit</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Diri</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="/admin/profile" enctype="multipart/form-data">
          @csrf
        <div class="modal-body"> 
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image" id="uploadImage" onchange="PreviewImage();" >
                              <label class="custom-file-label" for="uploadImage">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>
                 
                <div>
                  <div class="form-group">
                    <img class="img-fluid" id="imageView" width="100%">
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Deskripsi</label><br>
                    <textarea id="summernote" name="description">
                    </textarea>
                </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  

  @endsection