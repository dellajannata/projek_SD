<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Blogs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-header">
                        <Center>EDIT DATA KELAS 6</Center>
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
                        <form action="{{ route('crudkelas6.update', $kelas6->id ) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Hari</label>
                                <select class="form-control" name="hari" id="hari">
                                    <option hidden>Pilih Hari</option>
                                    <option value="senin" {{ $kelas6->hari == 'senin' ? 'selected' : '' }}>Senin</option>
                                    <option value="selasa" {{ $kelas6->hari == 'selasa' ? 'selected' : '' }}>Selasa</option>
                                    <option value="rabu" {{ $kelas6->hari == 'rabu' ? 'selected' : '' }}>Rabu</option>
                                    <option value="kamis" {{ $kelas6->hari == 'kamis' ? 'selected' : '' }}>Kamis</option>
                                    <option value="jumat" {{ $kelas6->hari == 'jumat' ? 'selected' : '' }}>Jum'at</option>
                                    <option value="sabtu" {{ $kelas6->hari == 'sabtu' ? 'selected' : '' }}>Sabtu</option>
                                    <option value="minggu" {{ $kelas6->hari == 'minggu' ? 'selected' : '' }}>Minggu</option>
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
                                <input type="text" class="form-control @error('mapel') is-invalid @enderror" name="mapel" value="{{ $kelas6->mapel }}" placeholder="Masukkan Mata Pelajaran">
                            
                                <!-- error message untuk title -->
                                @error('mapel')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jam Mulai</label>
                                <input type="time" class="form-control @error('jm_mulai') is-invalid @enderror" name="jm_mulai" value="{{ $kelas6->jm_mulai }}">
                            
                                <!-- error message untuk title -->
                                @error('jm_mulai')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jam Berakhir</label>
                                <input type="time" class="form-control @error('jm_akhir') is-invalid @enderror" name="jm_akhir" value="{{ $kelas6->jm_akhir }}">
                            
                                <!-- error message untuk title -->
                                @error('jm_akhir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <a class="btn btn-md btn-primary" href="{{ route('crudkelas6.index') }}" class="">KEMBALI</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>