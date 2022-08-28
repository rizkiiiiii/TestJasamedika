@extends('admin.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action=" {{route('kelurahan.update',$kelurahan->id)}} " method="post">
                    @csrf @method('put')
                    <div class="form-group">
                        <label for="">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" class="form-control" value=" {{$kelurahan->nama_kelurahan}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" class="form-control" value=" {{$kelurahan->nama_kecamatan}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kota</label>
                        <input type="text" name="nama_kota" class="form-control" value=" {{$kelurahan->nama_kota}} " required>
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