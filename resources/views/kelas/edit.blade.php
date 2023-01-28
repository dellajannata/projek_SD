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
                        <form action="{{ route('crudkelas1.update', $kelas->id ) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Hari</label>
                                <select class="form-control" name="hari" id="hari">
                                    <option hidden>Pilih Hari</option>
                                    <option value="Senin" {{ $kelas->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                                    <option value="Selasa" {{ $kelas->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                    <option value="Rabu" {{ $kelas->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                    <option value="Kamis" {{ $kelas->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                    <option value="Jumat" {{ $kelas->hari == 'Jumat' ? 'selected' : '' }}>Jum'at</option>
                                    <option value="Sabtu" {{ $kelas->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                    <option value="Minggu" {{ $kelas->hari == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                </select>
                            
                                <!-- error message untuk title -->
                                @error('hari')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Mata Pelajaran</label>
                                <input type="text" class="form-control @error('mapel') is-invalid @enderror" name="mapel" value="{{ $kelas->mapel }}" placeholder="Masukkan Mata Pelajaran">
                            
                                <!-- error message untuk title -->
                                @error('mapel')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jam Mulai</label>
                                <input type="time" class="form-control @error('jm_mulai') is-invalid @enderror" name="jm_mulai" value="{{ $kelas->jm_mulai }}">
                            
                                <!-- error message untuk title -->
                                @error('jm_mulai')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jam Berakhir</label>
                                <input type="time" class="form-control @error('jm_akhir') is-invalid @enderror" name="jm_akhir" value="{{ $kelas->jm_akhir }}">
                            
                                <!-- error message untuk title -->
                                @error('jm_akhir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Keterangan</label>
                                <input type="text" class="form-control @error('ket') is-invalid @enderror" name="ket" value="{{ $kelas->ket }}" placeholder="Masukkan Keterangan">
                            
                                <!-- error message untuk title -->
                                @error('ket')
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