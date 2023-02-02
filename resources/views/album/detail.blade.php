@extends('adminBeranda.mainData')
@section('adminBeranda.content')
<body style="background: lightgray">
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-header">
                    <Center>DETAIL DATA ALBUM</Center>
                </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1 ?>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                FOTO
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/album/' . $album->image) }}" class="rounded"
                                                    style="width: 250px; height:200px" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Nama Kegiatan
                                            </td>
                                            <td>
                                                {{$album->judul}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Tanggal Kegiatan
                                            </td>
                                            <td>
                                                {{$album->tanggal}}
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            </div>
                            <br>
                            <a class="btn btn-MD btn-primary" href="{{ route('crudalbumfoto.index') }}" class="">KEMBALI</a>
                        </div>
                </div>
            </div>
        </div>
</div>
@endsection