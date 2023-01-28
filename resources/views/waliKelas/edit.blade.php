@extends('adminBeranda.mainData')
@section('adminBeranda.content')
<body style="background: lightgray">
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-header">
                        <Center>EDIT DATA WALI KELAS</Center>
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
                        <form action="{{ route('crudwalikelas.update', $wk->id ) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Kelas</label>
                                <select class="form-control" name="kelas" id="kelas">
                                    <option hidden>Pilih Kelas</option>
                                    <option value="Kelas 1" {{ $wk->kelas == 'Kelas 1' ? 'selected' : '' }}>Kelas 1</option>
                                    <option value="Kelas 2"{{ $wk->kelas == 'Kelas 2' ? 'selected' : '' }}>Kelas 2</option>
                                    <option value="Kelas 3" {{ $wk->kelas == 'Kelas 3' ? 'selected' : '' }}>Kelas 3</option>
                                    <option value="Kelas 4" {{ $wk->kelas == 'Kelas 4' ? 'selected' : '' }}>Kelas 4</option>
                                    <option value="Kelas 5" {{ $wk->kelas == 'Kelas 5' ? 'selected' : '' }}>Kelas 5</option>
                                    <option value="Kelas 6" {{ $wk->kelas == 'Kelas 6' ? 'selected' : '' }}>Kelas 6</option>
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
                                <input type="number" value="{{ $wk->jmlh_siswa_lk }}"
                                    class="form-control @error('jmlh_siswa_lk') is-invalid @enderror" name="jmlh_siswa_lk">

                                <!-- error message untuk title -->
                                @error('jmlh_siswa_lk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah Siswa PR</label>
                                <input type="number" value="{{ $wk->jmlh_siswa_pr }}"
                                    class="form-control @error('jmlh_siswa_pr') is-invalid @enderror" name="jmlh_siswa_pr">

                                <!-- error message untuk title -->
                                @error('jmlh_siswa_pr')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Wali Kelas</label>
                                <select name="guru_id"
                                id="guru_id" class="form-control">
                                @foreach ($nama as $nm)
                                    <option value="{{ $nm->id }}" {{ $nm->nama ==  $nm->nama ? 'selected' : '' }}>{{ $nm->nama }}</option>
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