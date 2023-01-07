@extends('adminBeranda.main')
@section('adminBeranda.content')

    <body style="background: lightgray">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('crudkelas3.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH
                                </a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Jam Mulai</th>
                                        <th scope="col">Jam Berakhir</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @forelse ($kelas3 as $k)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $k->hari }}</td>
                                            <td>{{ $k->mapel }}</td>
                                            <td>{{ $k->jm_mulai }}</td>
                                            <td>{{ $k->jm_akhir }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('crudkelas3.destroy', $k->id) }}" method="POST">
                                                    <a href="{{ route('crudkelas3.edit', $k->id) }}"
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
                            {{ $kelas3->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
