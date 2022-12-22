@include('layout.header');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Edit Pasca Melahirkan <small>- Dian Mustika </small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('admin/pascalahiran')}}">Pasca Melahirkan</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
           
               

                 <!-- form start -->
                 <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title"><a href="{{url('admin/pascalahiran')}}">Kembali <a></h3>
                    </div>
                    <form method="POST" action="{{ url('admin/pascalahiran/update', $pascamelahirkan->id ) }}">
                      @csrf <!-- {{ csrf_field() }} -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masukan Nam Lengkap</label>
                    <input type="text" name="nama" value="{{ $pascamelahirkan->nama }}" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Handphone</label>
                    <input class="form-control" value="{{ $pascamelahirkan->no_hp }}" name="no_hp" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input class="form-control" value="{{ $pascamelahirkan->alamat }}" name="alamat" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rencana Lahiran</label>
                    <input class="form-control" {{ $pascamelahirkan->rencana_lahiran }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">HPL</label>
                    <input class="form-control" {{ $pascamelahirkan->hpl }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berat Badan</label>
                    <input class="form-control" {{ $pascamelahirkan->berat_badan }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Anak ke</label>
                    <input class="form-control" {{ $pascamelahirkan->anak_ke }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Proses Lahiran</label>
                    <input class="form-control" {{ $pascamelahirkan->proses_lahiran }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rencana ASI</label>
                    <input class="form-control" {{ $pascamelahirkan->rencana_asi }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Implan</label>
                    <input class="form-control" {{ $pascamelahirkan->implan }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Perawatan </label>
                    <input class="form-control" {{ $pascamelahirkan->perawatan }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slimming</label>
                    <input class="form-control" {{ $pascamelahirkan->slimming }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Riwayat Penyakit</label>
                    <input class="form-control" value="{{ $pascamelahirkan->riwayat_penyakit }}" name="riwayat_penyakit" placeholder="Kelas"></input>
                  </div>                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan Lain</label>
                    <input class="form-control" value="{{ $pascamelahirkan->keterangan_lain }}" name="keterangan_lain" placeholder="Kelas"></input>
                  </div>    
                  <div class="form-group">
                    <label for="exampleInputPassword1">status</label>
                    <input class="form-control" {{ $pascamelahirkan->status }}name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  
                 
              

                  <div class="form-group">
                      <button type="reset" class="btn btn-default">Batal</button>
                      <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                </form>
                </div>
                <!-- /.card-body -->
              </div>
           

           
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-4">
           

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('layout.footer');

