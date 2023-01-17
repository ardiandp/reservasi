@include('layout.header');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> SPA HAMIL <small>Dian Mustika</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Pendaftaran</a></li>
              <li class="breadcrumb-item active">Spa Hamil</li>
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
                      <h3 class="card-title"><a href="{{url('daftar')}}">Kembali <a></h3>
                    </div>
              <form method="POST" action="simpanspahamil">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telp</label>
                    <input type="text" name="telp" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berat Badan</label>
                    <input type="text" name="beratbadan" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Usia Kehamilan</label>
                    <input type="text" name="usiakehamilan" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">kehamilan Ke</label>
                    <input type="text" name="kehamilan_ke" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Menggunakan Pen</label>
                    <input type="text" name="menggunakan_pen" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ada Keluhan </label>
                    <input type="text" name="ada_keluhan" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kondisi Plasenta</label>
                    <input type="text" name="kondisi_plasenta" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ada Kram tubuh</label>
                    <input type="text" name="kram_tubuh" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pendarahan</label>
                    <input type="text" name="pendarahan" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stretchmark</label>
                    <input type="text" name="stretchmark" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Lokasi Perawatan</label>
                    <input type="text" name="lokasi_perawatan" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gerai</label>
                    <input type="text" name="gerai" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                   <input type="submit" value="Simpan data" class="btn btn-flat btn-success btn-sm">
                   <input type="reset" value="Batal" class="btn btn-flat btn-default btn-sm">
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