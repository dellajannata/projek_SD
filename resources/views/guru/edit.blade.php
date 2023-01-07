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
                    <Center>EDIT DATA GURU</Center>
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
                        <form action="{{ route('crudguru.update' , $guru->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf 
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Foto</label>
                                <input type="file" value="{{$guru->iamge}}" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NIK</label>
                                <input type="text" value="{{$guru->nik}}" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" placeholder="Masukkan NIK">
                            
                                <!-- error message untuk title -->
                                @error('nik')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" value="{{$guru->nama}}" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JK</label>
                                <select class="form-control" name="jk" id="jk">
                                    <option hidden>Pilih Jenis Kelamin</option>
                                    <option value="l" {{ $guru->jk == 'l' ? 'selected' : '' }} >Laki - Laki</option>
                                    <option value="p" {{ $guru->jk == 'p' ? 'selected' : '' }} >Perempuan</option>
                                </select>
                                <!-- error message untuk title -->
                                @error('jk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL LAHIR</label>
                                <input type="date" value="{{$guru->tglLahir}}" class="form-control @error('tglLahir') is-invalid @enderror" name="tglLahir" value="{{ old('tglLahir') }}" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk title -->
                                @error('tglLahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NUPTK</label>
                                <input type="text" value="{{$guru->nuptk}}" class="form-control @error('nuptk') is-invalid @enderror" name="nuptk" value="{{ old('nuptk') }}" placeholder="Masukkan NUPTK">
                            
                                <!-- error message untuk title -->
                                @error('nuptk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NIP</label>
                                <input type="text" value="{{$guru->nip}}" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP">
                            
                                <!-- error message untuk title -->
                                @error('nip')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PANGKAT/GOL</label>
                                <input type="text" value="{{$guru->gol}}" class="form-control @error('gol') is-invalid @enderror" name="gol" value="{{ old('gol') }}" placeholder="Masukkan Pangkat/Gol">
                            
                                <!-- error message untuk title -->
                                @error('gol')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">STATUS</label>
                                <input type="text" value="{{$guru->status}}" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Masukkan Status">
                            
                                <!-- error message untuk title -->
                                @error('status')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JENIS PTK</label>
                                <input type="text" value="{{$guru->jenisPTK}}" class="form-control @error('jenisPTK') is-invalid @enderror" name="jenisPTK" value="{{ old('jenisPTK') }}" placeholder="Masukkan Jenis PTK">
                            
                                <!-- error message untuk title -->
                                @error('jenisPTK')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PENDIDIKAN TERAKHIR</label>
                                <input type="text" value="{{$guru->pendidikanTerakhir}}" class="form-control @error('pendidikanTerakhir') is-invalid @enderror" name="pendidikanTerakhir" value="{{ old('pendidikanTerakhir') }}" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk title -->
                                @error('pendidikanTerakhir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JURUSAN</label>
                                <input type="text" value="{{$guru->jurusan}}" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" placeholder="Masukkan Jurusan">
                            
                                <!-- error message untuk title -->
                                @error('jurusan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TMT GTK</label>
                                <input type="date" value="{{$guru->tmt_gtk}}" class="form-control @error('tmt_gtk') is-invalid @enderror" name="tmt_gtk" value="{{ old('tmt_gtk') }}" placeholder="Masukkan TMT GTK">
                            
                                <!-- error message untuk title -->
                                @error('tmt_gtk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TMT GTK INDUK</label>
                                <input type="date" value="{{$guru->tmt_gtk_induk}}" class="form-control @error('tmt_gtk_induk') is-invalid @enderror" name="tmt_gtk_induk" value="{{ old('tmt_gtk_induk') }}" placeholder="Masukkan TMT GTK INDUK">
                            
                                <!-- error message untuk title -->
                                @error('tmt_gtk_induk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <a class="btn btn-md btn-primary" href="{{ route('crudguru.index') }}" class="">KEMBALI</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>