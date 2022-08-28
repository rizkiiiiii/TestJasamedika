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
                    <form action=" {{route('kelurahan.store')}} " method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kota</label>
                        <input type="text" name="nama_kota" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection