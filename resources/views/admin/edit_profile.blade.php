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
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row" >
          <div class="card">
            <div class="card-header">
              Edit Profile
            </div>
            <form  method="post" action="/admin/profile/{{$profile->id}}" enctype="multipart/form-data">
              @method('patch')
              @csrf
         
            <div class="card-body">
                <!-- /.card -->
                <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Gambar</label>
                      <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="uploadImage" onchange="PreviewImage();" >
                            <label class="custom-file-label" for="uploadImage">Pilih Gambar</label>
                            @error('image')
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>  
                            @enderror
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <img class="img-fluid" id="imageView" width="100%">
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Deskripsi</label><br>
                    <textarea class="@error('description') is-invalid @enderror" id="summernote" name="description">
                      {{$profile->description}}
                    </textarea>
                    @error('description')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- /.card -->
            <div class="card-footer">
              <button class="btn btn-info" type="submit">Simpan</button>
            </div>
          </form>
          </div>
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection