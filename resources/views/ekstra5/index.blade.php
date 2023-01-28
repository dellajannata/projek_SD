@extends('adminBeranda.main')
@section('adminBeranda.content')

    <body style="background: lightgray">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('crudekstra5.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH
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
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama Ekstrakurikuler</th>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Jam</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @forelse ($ekstra5 as $e)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td><img src="{{ asset('storage/ekstra5/' . $e->image) }}" class="rounded"
                                                style="width: 230px; height:180px"></td>
                                            <td>{{ $e->nama }}</td>
                                            <td>{{ $e->hari }}</td>
                                            <td>{{ $e->jam }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('crudekstra5.destroy', $e->id) }}" method="POST">
                                                    <a href="{{ route('crudekstra5.edit', $e->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data ekstrakurikuler belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $ekstra5->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
