@extends('adminBeranda.mainData')
@section('adminBeranda.content')

    <body style="background: lightgray">
        <div class="container mt-5">
            <div class="col">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
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
                                        <?php $no = 1; ?>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                Judul
                                            </td>
                                            <td>
                                                {{ $visimisi->judul }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                Deskripsi
                                            </td>
                                            <td>
                                                {!! $visimisi->deskripsi !!}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <a class="btn btn-sm btn-primary" href="{{ route('visimisi.index') }}"
                                class="">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
