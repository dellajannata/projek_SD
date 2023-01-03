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
                            <a href="{{ route('crudguru.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH GURU</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">FOTO</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">JENIS PTK</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1 ?>
                                    @forelse ($guru as $gr)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/guru/' . $gr->image) }}" class="rounded"
                                                    style="width: 250px; height:200px" >
                                            </td>
                                            <td>{{ $gr->nama }}</td>
                                            <td>{{ $gr->jenisPTK }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('crudguru.destroy', $gr->id) }}" method="POST">
                                                    <a href="{{ route('crudguru.edit', $gr->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                        <a href="{{ route('crudguru.show', $gr->id) }}"
                                                            class="btn btn-sm btn-info">Details</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Guru belum Tersedia.
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
