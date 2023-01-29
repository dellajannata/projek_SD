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
                        <p style="font-size: 30px">Kelas 2</p>
                    </div>
                </div><!-- end title -->
            </div><!-- end title -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <h5>Jumlah Siswa Laki - Laki : {{ $jmlSiswa1 }}</h5>
                                <h5>Jumlah Siswa Perempuan : {{ $jmlSiswa2 }}</h5>
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
                                            @forelse ($kelas2 as $k)
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
                                    {{ $kelas2->links() }}
                                </div>
                            </div>
                        </div>
                        <br><br>
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
                                            @forelse ($kelas2Selasa as $k)
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
                                    {{ $kelas2Selasa->links() }}
                                </div>
                            </div>
                        </div>
                        <br><br>
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
                                            @forelse ($kelas2Rabu as $k)
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
                                    {{ $kelas2Rabu->links() }}
                                </div>
                            </div>
                        </div>
                        <br><br>
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
                                            @forelse ($kelas2Kamis as $k)
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
                                    {{ $kelas2Kamis->links() }}
                                </div>
                            </div>
                        </div>
                        <br><br>
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
                                            @forelse ($kelas2Jumat as $k)
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
                                    {{ $kelas2Jumat->links() }}
                                </div>
                            </div>
                        </div>
                        <br><br>
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
                                            @forelse ($kelas2Sabtu as $k)
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
                                    {{ $kelas2Sabtu->links() }}
                                </div>
                            </div>
                        </div>
                        <br><br>
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
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Nama Kegiatan</th>
                                                <th scope="col">Hari</th>
                                                <th scope="col">Jam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @forelse ($k2 as $k)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td><img src="{{ asset('storage/ekstra2/' . $k->image) }}" class="rounded"
                                                        style="width: 230px; height:180px"></td>
                                                    <td>{{ $k->nama }}</td>
                                                    <td>{{ $k->hari }}</td>
                                                    <td>{{ $k->jam }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data Ekstrakurikuler Belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $k2->links() }}
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
