@extends('adminBeranda.main')
@section('adminBeranda.content')

    <body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <Center>EDIT DATA KEGIATAN</Center>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with your
                                input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('pembiasaan.update' , $pembiasaan->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf 
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Foto</label>
                                <input type="file" value="{{$pembiasaan->image}}" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Kegiatan</label>
                                <input type="text" value="{{$pembiasaan->namaKegiatan}}" class="form-control @error('namaKegiatan') is-invalid @enderror" name="namaKegiatan" value="{{ old('namaKegiatan') }}" placeholder="Masukkan Nama Kegiatan">
                            
                                <!-- error message untuk title -->
                                @error('namaKegiatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">DESKRIPSI</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi">{{ old('deskripsi', $pembiasaan->deskripsi) }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <a class="btn btn-md btn-primary" href="{{ route('pembiasaan.index') }}" class="">KEMBALI</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection