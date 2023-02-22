@include('theme.header');
@include('theme.sidebar');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Daftar Perawatan Online</small></h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
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

                  
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-check"></i> Alert!</h5>
      <p>{{ $message }}</p>
    </div>
    @endif


       <div class="row">
      <!-- /.col-md-6 -->
          <div class="col-lg-4">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Pasca Lahiran</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">123232 orang</h6>

                <p class="card-text">Calon Customer</p>
                <a href="{{ url('admin/pascalahiran') }}" class="btn btn-primary">Pasca Lahiran</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Slimming</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">11</h6>

                <p class="card-text">Calon Customer </p>
                <a href="{{ url('admin/slimming') }}" class="btn btn-primary">Slimming</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">spa Hamil</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">321</h6>

                <p class="card-text">Antrian.</p>
                <a href="{{ url('admin/spahamil') }}" class="btn btn-primary">Spa Hamil</a>
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

  @include('theme.footer');