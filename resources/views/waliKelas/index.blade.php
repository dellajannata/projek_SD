@extends('adminBeranda.main')
@section('adminBeranda.content')

    <body style="background: lightgray">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('crudwalikelas.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH
                            </a>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Nama Wali Kelas</th>
                                        <th scope="col">Jumlah Siswa LK</th>
                                        <th scope="col">Jumlah Siswa PR</th>

                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @forelse ($wk as $w)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $w->guru->nama }}</td>
                                            <td>{{ $w->kelas }}</td>
                                            <td>{{ $w->jmlh_siswa_lk }}</td>
                                            <td>{{ $w->jmlh_siswa_pr}}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('crudwalikelas.destroy', $w->id) }}" method="POST">
                                                    <a href="{{ route('crudwalikelas.edit', $w->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data kelas belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $wk->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
