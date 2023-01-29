@extends('layouts.main')
@section('layouts.content')
    <div class="all-title-box">
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>Jadwal Pelajaran</h3>
                        <p style="font-size: 30px">Kelas 6</p>
                    </div>
                </div><!-- end title -->
            </div><!-- end title -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <h3>Jumlah Siswa Laki - Laki : {{ $jmlSiswa1 }}</h3>
                                <h3>Jumlah Siswa Perempuan : {{ $jmlSiswa2 }}</h3>
                                <a class="btn btn-outline-primary" href="/ekstrakurikuler-kelas-6" role="button">Jadwal Ekstrakurikuler</a> 
                                <br><br>    
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Hari</th>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">Jam Mulai</th>
                                                <th scope="col">Jam Berakhir</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @forelse ($kelas6 as $k)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $k->hari }}</td>
                                                    <td>{{ $k->mapel }}</td>
                                                    <td>{{ $k->jm_mulai }}</td>
                                                    <td>{{ $k->jm_akhir }}</td>
                                                    <td>{{ $k->ket }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data kelas belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $kelas6->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Hari</th>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">Jam Mulai</th>
                                                <th scope="col">Jam Berakhir</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @forelse ($kelas6Selasa as $k)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $k->hari }}</td>
                                                    <td>{{ $k->mapel }}</td>
                                                    <td>{{ $k->jm_mulai }}</td>
                                                    <td>{{ $k->jm_akhir }}</td>
                                                    <td>{{ $k->ket }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data kelas belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $kelas6Selasa->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Hari</th>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">Jam Mulai</th>
                                                <th scope="col">Jam Berakhir</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @forelse ($kelas6Rabu as $k)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $k->hari }}</td>
                                                    <td>{{ $k->mapel }}</td>
                                                    <td>{{ $k->jm_mulai }}</td>
                                                    <td>{{ $k->jm_akhir }}</td>
                                                    <td>{{ $k->ket }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data kelas belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $kelas6Rabu->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Hari</th>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">Jam Mulai</th>
                                                <th scope="col">Jam Berakhir</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @forelse ($kelas6Kamis as $k)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $k->hari }}</td>
                                                    <td>{{ $k->mapel }}</td>
                                                    <td>{{ $k->jm_mulai }}</td>
                                                    <td>{{ $k->jm_akhir }}</td>
                                                    <td>{{ $k->ket }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data kelas belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $kelas6Kamis->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Hari</th>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">Jam Mulai</th>
                                                <th scope="col">Jam Berakhir</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @forelse ($kelas6Jumat as $k)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $k->hari }}</td>
                                                    <td>{{ $k->mapel }}</td>
                                                    <td>{{ $k->jm_mulai }}</td>
                                                    <td>{{ $k->jm_akhir }}</td>
                                                    <td>{{ $k->ket }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data kelas belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $kelas6Jumat->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Hari</th>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">Jam Mulai</th>
                                                <th scope="col">Jam Berakhir</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @forelse ($kelas6Sabtu as $k)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $k->hari }}</td>
                                                    <td>{{ $k->mapel }}</td>
                                                    <td>{{ $k->jm_mulai }}</td>
                                                    <td>{{ $k->jm_akhir }}</td>
                                                    <td>{{ $k->ket }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data kelas belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $kelas6Sabtu->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
