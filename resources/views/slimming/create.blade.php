@extends('slimming.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Add New Student</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('slimming.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('slimming.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Handphone:</strong>
                <input class="form-control" name="no_hp" placeholder="Kelas"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input class="form-control" name="alamat" placeholder="Kelas"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Berat Badan:</strong>
                <input class="form-control" name="berat_badan" placeholder="Kelas"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokasi Perawatan:</strong>
                <input class="form-control" name="lokasi_perawatan" placeholder="Kelas"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gerai:</strong>
                <input class="form-control" name="gerai" placeholder="Kelas"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Riwayat Penyakit:</strong>
                <input class="form-control" name="riwayat_penyakit" placeholder="Kelas"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan Lain:</strong>
                <input class="form-control" name="keterangan_lain" placeholder="Kelas"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
   
</form>
@endsection