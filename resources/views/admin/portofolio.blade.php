@extends('layout/admin/main')

@section('isi')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-swatchbook"></i></i> Portofolio</h1>
            
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
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            @if (session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
            @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Beberapa portofolio yang anda miliki</h3>
                <div class="text-right">
                <button class="btn btn-success " type="button" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Portofolio</button>
            </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 20%">Title</th>
                    <th style="width: 40%">Deskripsi</th>
                    <th style="width: 20%">Gambar</th>
                    <th style="width: 15%" >Detail</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($portofolio as $p)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$p->title}}</td>
                    <td>{{Str::limit($p->description,20)}}</td>
                    <td><img class="img-fluid" src="/uploads/{{$p->image}}" width="50%"></td>
                    <td><a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#editPort{{$p->id}}">Edit</a>
                      <a class="btn btn-danger btn-sm" href="" data-toggle="modal" data-target="#deletePort{{$p->id}}">Hapus</a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
  @foreach ($portofolio as $p)
  <div class="modal fade" id="editPort{{$p->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Portofolio</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="/admin/portofolio/{{$p->id}}" enctype="multipart/form-data">
          @method('patch')
          @csrf
        <div class="modal-body">
            <div class="col-md-12 row">
                <div class="row">    
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input  class="form-control" required id="exampleInputEmail1" name="title" placeholder="Masukkan Title" value="{{$p->title}}">
                        <input  class="form-control" required hidden name="id" placeholder="Masukkan Title" value="{{$p->id}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image"  >
                              <label class="custom-file-label" for="uploadImage">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="form-group col-12">
                  <label for="exampleInputUrl">URL</label>
                  <div class="input-group">
                        <input class="form-control" name="url" placeholder="Masukkan URL" value=" {{$p->url}}">
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Deskripsi</label><br>
                    <textarea id="summernoteEdit" name="description">
                      {{$p->description}}
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
  @endforeach
  
  @foreach ($portofolio as $a)
  <div class="modal fade" id="deletePort{{$a->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Achievment</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="/admin/portofolio/{{$a->id}}">
          @method('delete')
          @csrf
        <div class="modal-body">
            <div class="col-md-12 row">
              Hapus portofolio {{$a->title}}?
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach
  
  <div class="modal fade" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Portofolio</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="/admin/portofolio" enctype="multipart/form-data">
          @csrf
        <div class="modal-body">
            <div class="col-md-12 row">
            <div class="row">    
            <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input  class="form-control" id="exampleInputEmail1" name="title" placeholder="Masukkan Title">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Gambar</label>
                <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" id="uploadImage" onchange="PreviewImage();" >
                      <label class="custom-file-label" for="uploadImage">Pilih Gambar</label>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="form-group">
              <img class="img-fluid" id="imageView" width="100%">
            </div>
            <div class="form-group">
              <label for="exampleInputUrl">URL</label>
              <div class="input-group">
                    <input class="form-control" name="url" placeholder="Masukkan URL">
              </div>
                <div class="form-group">
                    <label for="exampleInputFile">Deskripsi</label><br>
                    <textarea id="summernote" name="description" placeholder="Masukkan Deskripsi">
                         
                    </textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  


  

  @endsection