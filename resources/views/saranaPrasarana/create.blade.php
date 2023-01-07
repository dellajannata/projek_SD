<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sarana Prasarana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <Center>TAMBAH DATA SARANA PRASARANA</Center>
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
                        <form action="{{ route('saranaPrasarana.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">SARANA PRASARANA</label>
                                <input type="text" class="form-control @error('namaSarana') is-invalid @enderror" name="namaSarana" value="{{ old('namaSarana') }}" placeholder="Masukkan Sarana Prasarana">
                            
                                <!-- error message untuk title -->
                                @error('namaSarana')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <a class="btn btn-md btn-primary" href="{{ route('saranaPrasarana.index') }}" class="">KEMBALI</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>