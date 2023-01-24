@extends('adminBeranda.mainData')
@section('adminBeranda.content')
<body style="background: lightgray">
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-header">
                    <Center>DETAIL DATA GURU</Center>
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
                                                <img src="{{ asset('storage/guru/' . $guru->image) }}" class="rounded"
                                                    style="width: 250px; height:200px" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                NIK
                                            </td>
                                            <td>
                                                {{$guru->nik}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Nama
                                            </td>
                                            <td>
                                                {{$guru->nama}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Jenis Kelamin
                                            </td>
                                            <td>
                                                @if ($guru->jk == 'p')
                                                Perempuan
                                                @elseif ($guru->jk == 'l')
                                                Laki - Laki
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Tanggal Lahir
                                            </td>
                                            <td>
                                                {{$guru->tglLahir}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                NUPTK
                                            </td>
                                            <td>
                                                {{$guru->nuptk}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                NIP
                                            </td>
                                            <td>
                                                {{$guru->nip}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Golongan
                                            </td>
                                            <td>
                                                {{$guru->gol}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Status
                                            </td>
                                            <td>
                                                {{$guru->status}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Jenis PTK
                                            </td>
                                            <td>
                                                {{$guru->jenisPTK}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Pendidikan Terakhir
                                            </td>
                                            <td>
                                                {{$guru->pendidikanTerakhir}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                Jurusan
                                            </td>
                                            <td>
                                                {{$guru->jurusan}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                TMT GTK
                                            </td>
                                            <td>
                                                {{$guru->tmt_gtk}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                TMT GTK INDUK
                                            </td>
                                            <td>
                                                {{$guru->tmt_gtk_induk}}
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                    </div>
                            <br>
                            <a class="btn btn-md btn-primary" href="{{ route('crudguru.index') }}" class="">KEMBALI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection