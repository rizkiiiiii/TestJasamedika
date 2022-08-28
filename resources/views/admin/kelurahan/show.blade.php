@extends('admin.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lihat Data
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" class="form-control" value=" {{$kelurahan->nama_kelurahan}} " readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" class="form-control" value=" {{$kelurahan->nama_kecamatan}} " readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kota</label>
                        <input type="text" name="nama_kota" class="form-control" value=" {{$kelurahan->nama_kota}} " readonly>
                    </div>
                    
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection