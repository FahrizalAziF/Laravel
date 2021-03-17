@extends('layout/admin/main')
  <!-- Content Wrapper. Contains page content -->
@section('isi')
    
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Pengunjung</p>
              </div>
              <div class="icon">
                <i class="fas fa-eye"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$portofolio}}<sup style="font-size: 20px"></sup></h3>

                <p>Portofolio</p>
              </div>
              <div class="icon">
                <i class="fas fa-swatchbook "></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="color: white">{{$achievments}}</h3>

                <p style="color: white">Achievment</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy "></i>
              </div>
              <a href="#"  style="color: white" class="small-box-footer"  >More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row col-md-12">
          @if (session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
          @endif
          <div class="card" style="width: 100%">
            <div class="card-header">
              <div class="row">
                <h3 class="card-title col-10">Skill Languages</h3>
                <button class="btn btn-info text-center col-2" data-toggle="modal" data-target="#add" >Add</button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 5%">#</th>
                    <th style="width: 25%">Languages</th>
                    <th>Progress</th>
                    <th style="width: 10%">Label</th>
                    <th style="width: 15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($language as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->language}}</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: {{$item->progress}}%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-success">{{$item->progress}}%</span></td>
                    <td> <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#edit{{$item->id}}"><i class="fa fa-pen"></i> </button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$item->id}}"><i class="fa fa-trash"></i> </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
            </div>
          </div>
        </div>
        
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Achievment</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="/admin/language">
          @csrf
        <div class="modal-body">
            <div class="col-md-12 row">
                    <div class="form-group col" >
                        <label for="exampleInputEmail1">Language</label>
                        <input  class="form-control" required id="exampleInputEmail1" name="language" placeholder="Masukkan Language">
                    </div>
                <div class="form-group">
                    <label for="exampleInputFile">Progress</label>
                    <input  class="form-control" type="number" required id="exampleInputFile" name="progress" placeholder="Masukkan Progress">
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
  @foreach ($language as $item)
  <div class="modal fade" id="edit{{$item->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Achievment</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="/admin/language/{{$item->id}}">
          @method('patch')
          @csrf
        <div class="modal-body">
            <div class="col-md-12 row">
                    <div class="form-group col" >
                        <label for="exampleInputEmail1">Language</label>
                        <input  class="form-control" required id="exampleInputEmail1" name="language" placeholder="Masukkan Language" value="{{$item->language}}">
                    </div>
                <div class="form-group">
                    <label for="exampleInputFile">Progress</label>
                    <input  class="form-control" type="number" required id="exampleInputFile" name="progress" placeholder="Masukkan Progress" value="{{$item->progress}}">
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

  @foreach ($language as $item)
  <div class="modal fade" id="delete{{$item->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Achievment</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="/admin/language/{{$item->id}}">
          @method('delete')
          @csrf
        <div class="modal-body">
            <div class="col-md-12 row">
                    Anda yakin ingin menghapus bahasa pemrograman {{$item->language}}?
            </div>
          </div>
          <div class="modal-footer justify-content-between">
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
  @endsection