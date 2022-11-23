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

            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Handphone</th>
                    <th>Berat Badan(s)</th>
                    <th>Lokasi Perawatan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                 @forelse ($slimming as $data )
                 <tr>
                  <td>{{ $data->nama }}</td>
                  <td>{{$data->no_hp}}</td>
                  <td>{{ $data->berat_badan }}</td>
                  <td> {{ $data->lokasi_perawatan }}</td>
                  <td><a href="{{ url('admin/slimming/edit/'.$data->id) }}" class="btn btn-sm btn-flat btn-warning">test</a></td>
                </tr>
                 @empty
                   data Belum ada
                 @endforelse
                  
                  
                  </tbody>
                </table></div>


        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-4">\
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