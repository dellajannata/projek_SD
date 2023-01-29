<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPT SD Negeri 108 Gresik</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <p style="text-align: center; font-size:30px">LOGIN ADMIN</p>
                <hr>
                <p>SDN 108 Gresik</p>
                <hr>
                @error('email')
                    <span class="alert alert-success">
                        <p style="color: red">Maaf Email atau Password yang Anda Masukkan Salah.</p>
                    </span>
                @enderror
                <hr>
                <label for="">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                    placeholder="Masukkan Email Anda" type="email">
                
                <label for="">Password</label>
                <input class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                    placeholder="Masukkan Password Anda" type="password">
                <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                    Submit
                </button>
                <p>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" style="font-size: 16px">
                            {{ __('Lupa Kata Sandi?') }}
                        </a>
                    @endif
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/images/logo.png" alt="">
        </div>
    </div>
</body>

</html>
