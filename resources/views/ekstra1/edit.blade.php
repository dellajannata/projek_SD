@extends('adminBeranda.mainData')
@section('adminBeranda.content')
<body style="background: lightgray">
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-header">
                        <Center>EDIT DATA KELAS 1</Center>
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
                        <form action="{{ route('crudekstra1.update', $ekstra1->id ) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $ekstra1->image }}" placeholder="Masukkan Gambar">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Ekstrakurikuler</label>
                                <input type="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $ekstra1->nama }}" placeholder="Masukkan Nama Ekstrakurikuler">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Hari</label>
                                <select class="form-control" name="hari" id="hari">
                                    <option hidden>Pilih Hari</option>
                                    <option value="Senin" {{ $ekstra1->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                                    <option value="Selasa" {{ $ekstra1->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                    <option value="Rabu" {{ $ekstra1->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                    <option value="Kamis" {{ $ekstra1->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                    <option value="Jumat" {{ $ekstra1->hari == 'Jumat' ? 'selected' : '' }}>Jum'at</option>
                                    <option value="Sabtu" {{ $ekstra1->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                    <option value="Minggu" {{ $ekstra1->hari == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                </select>
                            
                                <!-- error message untuk title -->
                                @error('hari')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            

                            <div class="form-group">
                                <label class="font-weight-bold">Jam</label>
                                <input type="time" class="form-control @error('jam') is-invalid @enderror" name="jam" value="{{ $ekstra1->jam }}">
                            
                                <!-- error message untuk title -->
                                @error('jam')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <a class="btn btn-md btn-primary" href="{{ route('crudkelas1.index') }}" class="">KEMBALI</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection