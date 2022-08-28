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
                    <form action=" {{route('pasien.store')}} " method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">No Tlp</label>
                        <input type="text" name="no_tlp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">RT/RW</label>
                        <input type="text" name="rt_rw" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">tanggal_lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                    <div class="form-group">
                        <label for="">Id Pasien</label>
                        <input type="text" name="id_pasien" class="form-control" required>
                    </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection