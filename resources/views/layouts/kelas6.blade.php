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
                        <p>Kelas 6</p>
                    </div>
                </div><!-- end title -->
            </div><!-- end title -->

            <hr class="invis">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Jam Mulai</th>
                                            <th scope="col">Jam Berakhir</th>
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
                    <br><br>
                </div>
            </div>
        </div>
        </div>
    </div>
    @endsection
