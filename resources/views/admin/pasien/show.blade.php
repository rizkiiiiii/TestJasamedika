@extends('admin.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama" class="form-control" value=" {{$pasien->nama}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value=" {{$pasien->alamat}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">No Tlp</label>
                        <input type="text" name="no_tlp" class="form-control" value=" {{$pasien->no_tlp}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">RT/RW</label>
                        <input type="text" name="rt_rw" class="form-control" value=" {{$pasien->rt_rw}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" value=" {{$pasien->kelurahan}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">tanggal_lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value=" {{$pasien->tanggal_lahir}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" value=" {{$pasien->jenis_kelamin}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Id Pasien</label>
                        <input type="text" name="id_pasien" class="form-control" value=" {{$pasien->id_pasien}} " required>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection