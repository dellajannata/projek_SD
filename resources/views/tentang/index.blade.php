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
                            <a href="{{ route('tentangkami.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH TENTANG KAMI</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">JUDUL</th>
                                        <th scope="col">DESKRIPSI</th>
                                        <th scope="col">GAMBAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1 ?>
                                    @forelse ($tentangkami as $tk)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{ $tk->judul }}</td>
                                            <td>{{ $tk->deskripsi }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/tentangkami/' . $tk->gambar) }}" class="rounded"
                                                    style="width: 250px; height:200px" >
                                            </td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('tentangkami.destroy', $tk->id) }}" method="POST">
                                                    <a href="{{ route('tentangkami.edit', $tk->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                        <a href="{{ route('tentangkami.show', $tk->id) }}"
                                                            class="btn btn-sm btn-info">Details</a>
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