@extends('adminBeranda.main')
@section('adminBeranda.content')

    <body style="background: lightgray">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('pembiasaan.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH
                                KEGIATAN</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">FOTO</th>
                                        <th scope="col">NAMA KEGIATAN</th>
                                        <th scope="col">DESKRIPSI</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @forelse ($pembiasaan as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/pembiasaan/' . $p->image) }}" class="rounded"
                                                    style="width: 250px; height:200px">
                                            </td>
                                            <td>{{ $p->namaKegiatan }}</td>
                                            <td>{{ Illuminate\Support\Str::of($p->deskripsi)->words(2) }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('pembiasaan.destroy', $p->id) }}" method="POST">
                                                    <a href="{{ route('pembiasaan.edit', $p->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                    <a href="{{ route('pembiasaan.show', $p->id) }}"
                                                        class="btn btn-sm btn-info">Details</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data kegiatan pembiasaan belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $pembiasaan->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            //message with toastr
            @if (session()->has('success'))

                toastr.success('{{ session('success') }}', 'BERHASIL!');
            @elseif (session()->has('error'))
                toastr.error('{{ session('error') }}', 'GAGAL!');
            @endif
        </script>

        {{-- </body>

    </html> --}}
    @endsection
