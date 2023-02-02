@extends('adminBeranda.main')
@section('adminBeranda.content')

    <body style="background: lightgray">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('InformasiLink.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH
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
                                        <th scope="col">JUDUL</th>
                                        <th scope="col">LINK TERKAIT</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @forelse ($InformasiLink as $iL)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $iL->judul }}</td>
                                            <td class="title">{!!Illuminate\Support\Str::of($iL->keterangan)->words(5)!!}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('InformasiLink.destroy', $iL->id) }}" method="POST">
                                                    <a href="{{ route('InformasiLink.edit', $iL->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                    <a href="{{ route('InformasiLink.show', $iL->id) }}"
                                                        class="btn btn-sm btn-info">DETAILS</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $InformasiLink->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    @endsection
