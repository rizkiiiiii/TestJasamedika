@extends('admin.layouts')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Pasien
                    <a href="{{route('pasien.create')}}" class="btn btn-primary btn-small float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Id Pasien</th>
                                <th>Nama Pasien</th>
                                <th>Alamat</th>
                                <th>No Tlp</th>
                                <th>RT/RW</th>
                                <th>Kelurahan</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                            
                                @php $no =1; @endphp
                                @foreach($pasien as $data)
                            
                            <tr>
                                <td>{{$no++}}</td>
                                <td> {{$data->nama}} </td>
                                <td> {{$data->alamat}} </td>
                                <td> {{$data->no_tlp}} </td>
                                <td> {{$data->rt_rw}} </td>
                                <td> {{$data->kelurahan}} </td>
                                <td> {{$data->tanggal_lahir}} </td>
                                <td> {{$data->jenis_kelamin}} </td>
                                <td> {{$data->id_pasien}} </td>
                                <td>
                                    <form action=" {{route('pasien.destroy',$data->id)}} " method="POST">
                                    @csrf @method('delete')
                                    <a href="{{route('pasien.edit',$data->id)}}" class="btn btn-success btn-small">Edit</a>
                                    <a href="{{route('pasien.show',$data->id)}}" class="btn btn-warning btn-small">Show</a>
                                    <button type="submit" class="btn btn-danger btn-small">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
