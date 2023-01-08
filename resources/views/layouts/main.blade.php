<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>UPT SD Negeri 108 Gresik</title>
<link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{ asset('assets/images/logo.png" type="image/x-icon')}}" />
<link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png')}}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ asset('style.css')}}">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{ asset('css/versions.css')}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/custom.css')}}">

<!-- Modernizer for Portfolio -->
<script src="{{ asset('js/modernizer.js')}}"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

    <!-- header -->
    @include('layouts.header')
    @yield('layouts.content')
    <!-- end header -->

    <!--  footer -->
    @include('layouts.footer')
    <!-- end footer -->

    <!-- ALL JS FILES -->
    <script src="{{ asset('js/all.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="{{ asset('js/timeline.min.js')}}"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
</body>

</html>
