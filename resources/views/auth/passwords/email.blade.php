<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPT SD Negeri 108 Gresik</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="stylesheet" href="{{asset('login.css')}}">
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <p style="text-align: center; font-size:30px">RESET PASSWORD</p>
                <hr>
                <p>SDN 108 Gresik</p>
                <hr>
                @error('email')
                    <span class="alert alert-success">
                        <p style="color: red">Maaf Email Anda Tidak Ditemukan.</p>
                    </span>
                @enderror
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            Kami telah mengirim email ke tautan pengaturan ulang kata sandi Anda!
                        </div>
                    @endif
                <hr>
                <label for="">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                    placeholder="Masukkan Email Anda" type="email">
                <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                    Submit
                </button>
            </form>
        </div>
        <div class="right">
            <img src="{{asset('assets/images/logo.png')}}" alt="">
        </div>
    </div>
</body>

</html>
