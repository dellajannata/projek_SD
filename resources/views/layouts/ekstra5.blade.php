@extends('layouts.main')
@section('layouts.content')
<div class="all-title-box">
</div>

<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Jadwal Ekstrakurikuler</h3>
                    <p style="font-size: 30px">Kelas 5</p>
                </div>
            </div><!-- end title -->
        </div><!-- end title -->
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <h3>Jumlah Siswa Laki - Laki : {{$jmlSiswa1}}</h3>
                            <h3>Jumlah Siswa Perempuan : {{$jmlSiswa2}}</h3>
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
                                        @forelse ($k5 as $k)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td><img src="{{ asset('storage/ekstra5/' . $k->image) }}" class="rounded"
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
                                {{ $k5->links() }}
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