@extends('adminBeranda.main')
@section('adminBeranda.content')
    {{-- <!DOCTYPE html>
    <html lang="en"> --}}

    {{-- <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Blogs</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head> --}}

    <body style="background: lightgray">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('crudguru.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">GAMBAR</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">JK</th>
                                        <th scope="col">TANGGAL LAHIR</th>
                                        <th scope="col">NUPTK</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">PANGKAT/GOL</th>
                                        <th scope="col">JENIS PTK</th>
                                        <th scope="col">PENDIDIKAN TERAKHIR</th>
                                        <th scope="col">JURUSAN</th>
                                        <th scope="col">TMT GTK</th>
                                        <th scope="col">TMT GTK INDUK</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($guru as $gr)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ Storage::url('public/guru/') . $gr->image }}" class="rounded"
                                                    style="width: 150px">
                                            </td>
                                            <td>{{ $gr->nik }}</td>
                                            <td>{{ $gr->nama }}</td>
                                            <td>{{ $gr->jk }}</td>
                                            <td>{{ $gr->tglLahir}}</td>
                                            <td>{{ $gr->nuptk }}</td>
                                            <td>{{ $gr->nip }}</td>
                                            <td>{{ $gr->gol }}</td>
                                            <td>{{ $gr->status }}</td>
                                            <td>{{ $gr->jenisPTK }}</td>
                                            <td>{{ $gr->pendidikanTerakhir }}</td>
                                            <td>{{ $gr->jurusan }}</td>
                                            <td>{{ $gr->tmt_gtk }}</td>
                                            <td>{{ $gr->tmt_gtk_induk }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('crudguru.destroy', $gr->id) }}" method="POST">
                                                    <a href="{{ route('crudguru.edit', $gr->id) }}"
                                                        class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Blog belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $guru->links() }}
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
