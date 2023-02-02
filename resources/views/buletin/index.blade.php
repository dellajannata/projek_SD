@extends('adminBeranda.main')
@section('adminBeranda.content')
    <body style="background: lightgray">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('crudbuletin.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH</a>
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
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1 ?>
                                    @forelse ($buletin as $bt)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{ $bt->tanggal }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/buletin/' . $bt->gambar) }}" class="rounded"
                                                    style="width: 180px; height:230px" >
                                            </td>
                                            <td>{{ $bt->judul }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('crudbuletin.destroy', $bt->id) }}" method="POST">
                                                    <a href="{{ route('crudbuletin.edit', $bt->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                        <a href="{{ route('crudbuletin.show', $bt->id) }}"
                                                            class="btn btn-sm btn-info">DETAILS</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Buletin belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $buletin->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
