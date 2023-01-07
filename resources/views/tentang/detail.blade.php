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
                        <Center>DETAIL DATA TENTANG KAMI</Center>
                    </div>
                    <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1 ?>
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>
                                            Judul
                                        </td>
                                        <td>
                                            {{$tentangkami->judul}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>
                                            Deskripsi
                                        </td>
                                        <td>
                                            {{$tentangkami->deskripsi}}
                                        </td>
                                    </tr>

                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                FOTO
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/tentangkami/' . $tentangkami->gambar) }}" class="rounded"
                                                    style="width: 250px; height:200px" >
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            <br>
                            <a class="btn btn-md btn-primary" href="{{ route('tentangkami.index') }}" class="">KEMBALI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>