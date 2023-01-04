@extends('adminBeranda.main')
@section('adminBeranda.content')

    <body style="background: lightgray">

        <div class="container mt-5">
            <div class="col">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
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
                                                <img src="{{ asset('storage/informasiLomba/' . $informasi->image) }}" class="rounded"
                                                    style="width: 250px; height:200px" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Deskripsi
                                            </td>
                                            <td>
                                                {{$informasi->deskripsi}}
                                            </td>
                                        </tr>
                                    
                                </tbody>
                            </table>
                            <br>
                            <a class="btn btn-sm btn-primary" href="{{ route('informasiLomba.index') }}" class="">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
