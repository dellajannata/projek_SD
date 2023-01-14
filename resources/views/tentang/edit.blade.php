@extends('adminBeranda.mainData')
@section('adminBeranda.content')
    <body style="background: lightgray">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-header">
                            <Center>EDIT DATA TENTANG KAMI</Center>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with
                                    your
                                    input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('tentangkami.update', $tentangkami->id) }}" method="POST"
                                enctype="multipart/form-data">

                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="font-weight-bold">JUDUL</label>
                                    <input type="text" value="{{ $tentangkami->judul }}"
                                        class="form-control @error('judul') is-invalid @enderror" name="judul"
                                        value="{{ old('judul') }}" placeholder="Masukkan Judul">

                                    <!-- error message untuk title -->
                                    @error('judul')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">DESKRIPSI</label>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="summernote" rows="5"
                                        placeholder="Masukkan Deskripsi">{{ old('deskripsi', $tentangkami->deskripsi) }}</textarea>
    
                                    <!-- error message untuk content -->
                                    @error('deskripsi')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">Gambar</label>
                                    <input type="file" value="{{ $tentangkami->gambar }}"
                                        class="form-control @error('gambar') is-invalid @enderror" name="gambar">

                                    <!-- error message untuk title -->
                                    @error('gambar')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                                <a class="btn btn-md btn-primary" href="{{ route('tentangkami.index') }}"
                                    class="">KEMBALI</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $('#summernote').summernote({
            placeholder: 'Masukkan Deskripsi',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                // ['insert', ['link', 'picture', 'video']],
                // ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
        @endsection