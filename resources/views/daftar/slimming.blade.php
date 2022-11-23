@include('layout.header');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Form Slimming <small>- Dian Mustika </small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('daftar')}}">daftar</a></li>
              <li class="breadcrumb-item active">Slimming</li>
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
                    <form action="store" method="POST">
                      @csrf <!-- {{ csrf_field() }} -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masukan Nam Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Handphone</label>
                    <input class="form-control" name="no_hp" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input class="form-control" name="alamat" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berat Badan</label>
                    <input class="form-control" name="berat_badan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Lokasi Perwatan</label>
                    <input class="form-control" name="lokasi_perawatan" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gerai</label>
                    <input class="form-control" name="gerai" placeholder="Kelas"></input>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Riwayat Penyakit</label>
                    <input class="form-control" name="riwayat_penyakit" placeholder="Kelas"></input>
                  </div>                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan Lain</label>
                    <input class="form-control" name="keterangan_lain" placeholder="Kelas"></input>
                  </div>    
                  
                  <div id="drop-down" name="drop-down">
                    <label for="travel">Lokasi Perawatan </label>
                    <select name="travel" class="form-control" id="travel" onchange=showHide()>
                       <option value="1">Gerai</option>
                       <option value="0" selected>Homecare / Dirumah</option>
                    </select>
                 </div>
                 <div name="hidden-panel" id="hidden-panel">
                    <label for="country">Name of the country you visited: </label>
                    <input type="text" class="form-control" name="country" id="country"/>
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


  <script type="text/javascript">
    function showHide() {
       let travelhistory = document.getElementById('travel')
       if (travelhistory.value == 1) {
           document.getElementById('hidden-panel').style.display = 'block'
       } else {
           document.getElementById('hidden-panel').style.display = 'none'
       }
   }
   </script>