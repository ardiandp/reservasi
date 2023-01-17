@include('layout.header');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Pasca Melahirkan <small>- Dian Mustika </small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
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
              <form method="POST" action="simpanpascamelahirkan">
                @csrf <!-- {{ csrf_field() }} -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" required name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Handphone</label>
                    <input type="text" required name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="No Handphone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea name="alamat" required class="form-control" placeholder="Alamat lengkap"> </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rencana Lahiran</label>
                    <input type="text" required name="rencana_lahiran" class="form-control" id="exampleInputPassword1" placeholder="Rencana Lahiran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">HPL (rencana Lahiran)</label>
                    <input type="text" required name="hpl" class="form-control" id="exampleInputPassword1" placeholder="HPL">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berat Badan</label>
                    <input type="text" required name="berat_badan" class="form-control" id="exampleInputPassword1" placeholder="berat badan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Anak Ke</label>
                    <input type="text" required name="anak_ke" class="form-control" id="exampleInputPassword1" placeholder="Anak ke">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">proses Lahiran</label>
                    <input type="text" required name="proses_lahiran" class="form-control" id="exampleInputPassword1" placeholder="Proses lahiran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rencana ASI </label>
                    <input type="text" required name="rencana_asi" class="form-control" id="exampleInputPassword1" placeholder="Rencana ASI">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Implan</label>
                    <input type="text" required name="implan" class="form-control" id="exampleInputPassword1" placeholder="Implan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Perawatan</label>
                    <input type="text" required name="perawatan" class="form-control" id="exampleInputPassword1" placeholder="Perawatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slimming</label>
                    <input type="text" required name="slimming" class="form-control" id="exampleInputPassword1" placeholder="Slimming">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Riwayat Penyakit</label>
                   <textarea name="riwayat_penyakit" required class="form-control" placeholder="Riwayat Penyakit"> </textarea>
                  </div>

                  <div class="form-group">
                    <input type="submit" class="btn btn-flat btn-sm btn-success" value="Simpan data">
                    <input type="reset" class="btn btn-flat btn-sm btn-default" value="Kosongkan data">
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