@extends('adminBeranda.main')
@section('adminBeranda.content')
    <body style="background: lightgray">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('tentangkami.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH</a>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1 ?>
                                    @forelse ($tentangkami as $tk)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/tentangkami/' . $tk->gambar) }}" class="rounded"
                                                    style="width: 250px; height:200px" >
                                            </td>
                                            <td>{{ $tk->judul }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('tentangkami.destroy', $tk->id) }}" method="POST">
                                                    <a href="{{ route('tentangkami.edit', $tk->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                        <a href="{{ route('tentangkami.show', $tk->id) }}"
                                                            class="btn btn-sm btn-info">DETAILS</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Tentang Kami belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $tentangkami->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
