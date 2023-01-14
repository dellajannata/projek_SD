@extends('adminBeranda.main')
@section('adminBeranda.content')
    <body style="background: lightgray">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('crudguru.create') }}" class="btn btn-sm btn-md btn-success mb-3">TAMBAH</a>
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
                                                    style="width: 200px; height:240px" >
                                            </td>
                                            <td>{{ $gr->nama }}</td>
                                            <td>{{ $gr->jenisPTK }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('crudguru.destroy', $gr->id) }}" method="POST">
                                                    <a href="{{ route('crudguru.edit', $gr->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                        <a href="{{ route('crudguru.show', $gr->id) }}"
                                                            class="btn btn-sm btn-info">DETAILS</a>
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
        </div>
    </body>

    </html>
@endsection
