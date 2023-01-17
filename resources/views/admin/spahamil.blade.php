@include('layout.header');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Daftar Pasca Melahirkan <small>- Dian Mustika </small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">Admin</a></li>
              <li class="breadcrumb-item active">Pasca Lahiran</li>
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
          <div class="col-lg-12">

            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Telp</th>
                    <th>Berat Badan</th>
                    <th>Lokasi Perawatan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                 @forelse ($spahamil as $data )
                 <tr>
                  <td>{{ $data->nama }}</td>
                  <td>{{$data->telp}}</td>
                  <td>{{ $data->beratbadan }}</td>
                  <td> {{ $data->lokasi_perawatan }}</td>
                  <td><a href="{{ url('admin/spahamil/edit/'.$data->id) }}" class="btn btn-sm btn-flat btn-warning">Edit</a>
                    <a href="{{ url('admin/spahamil/hapus/'.$data->id) }}" class="btn btn-sm btn-flat btn-danger">Hapus</a></td>
                </tr>
                 @empty
                   data Belum ada
                 @endforelse
                  
                  
                  </tbody>
                </table></div>


        </div>
       
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