@extends('adminBeranda.mainData')
@section('adminBeranda.content')
<body style="background: lightgray">
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-header">
                        <Center>TAMBAH DATA WALI KELAS</Center>
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
                        <form action="{{ route('crudwalikelas.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Kelas</label>
                                <select class="form-control" name="kelas" id="kelas">
                                    <option hidden>Pilih Kelas</option>
                                    <option value="Kelas 1">Kelas 1</option>
                                    <option value="Kelas 2">Kelas 2</option>
                                    <option value="Kelas 3">Kelas 3</option>
                                    <option value="Kelas 4">Kelas 4</option>
                                    <option value="Kelas 5">Kelas 5</option>
                                    <option value="Kelas 6">Kelas 6</option>
                                </select>
                            
                                <!-- error message untuk title -->
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah Siswa LK</label>
                                <input type="number" class="form-control @error('jmlh_siswa_lk') is-invalid @enderror"
                                    name="jmlh_siswa_lk" value="{{ old('jmlh_siswa_lk') }}" placeholder="Masukkan Jumlah Siswa LK">

                                <!-- error message untuk title -->
                                @error('jmlh_siswa_lk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah Siswa PR</label>
                                <input type="number" class="form-control @error('jmlh_siswa_pr') is-invalid @enderror"
                                    name="jmlh_siswa_pr" value="{{ old('jmlh_siswa_pr') }}" placeholder="Masukkan Jumlah Siswa PR">

                                <!-- error message untuk title -->
                                @error('jmlh_siswa_pr')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Kelas</label>
                                <select name="guru_id"
                                id="nama" class="form-control">
                                <option value="">   Pilih Nama Guru   </option>
                                @foreach ($nama as $n)
                                    <option value="{{ $n->id }}">{{ $n->nama }}</option>
                                @endforeach
                            </select>
                            
                                <!-- error message untuk title -->
                                @error('guru_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <a class="btn btn-md btn-primary" href="{{ route('crudwalikelas.index') }}" class="">KEMBALI</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection