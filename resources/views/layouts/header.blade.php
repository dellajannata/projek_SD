 <!-- LOADER -->
 <div id="preloader">
     <div class="loader-container">
         <div class="progress-br float shadow">
             <div class="progress__item"></div>
         </div>
     </div>
 </div>
 <!-- END LOADER -->
 <!-- Start header -->
 <header class="top-navbar">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
             <a class="navbar-brand" href="{{ url('beranda') }}">
                 <img src="assets/images/logo.png" alt="" / style="max-width:70px;max-height:70px;float:left;">
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                 aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbars-host">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item"><a class="nav-link" href="{{url('/beranda')}}">Beranda</a></li>
                     <li class="nav-item"><a class="nav-link" href="{{url('/tentang')}}">Tentang Kami</a></li>
                     <li class="nav-item"><a class="nav-link" href="{{url('/buletin')}}">E-Buletin</a></li>
                     <li class="nav-item"><a class="nav-link" href="{{url('/P5')}}">Projek P5</a></li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Kelas
                         </a>
                         <div class="dropdown-menu" aria-labelledby="dropdown-a">
                             <a class="dropdown-item" href="{{url('/kelas')}}">Kelas 1</a>
                             <a class="dropdown-item" href="{{url('/kelas2')}}">Kelas 2</a>
                             <a class="dropdown-item" href="{{url('/kelas3')}}">Kelas 3</a>
                             <a class="dropdown-item" href="{{url('/kelas4')}}">Kelas 4</a>
                             <a class="dropdown-item" href="{{url('/kelas5')}}">Kelas 5</a>
                             <a class="dropdown-item" href="{{url('/kelas6')}}">Kelas 6</a>
                         </div>
                     </li>
                     <li class="nav-item"><a class="nav-link" href="{{url('/sarana')}}">Sarana Prasarana</a></li>
                     <li class="nav-item"><a class="nav-link" href="{{ url('/guru') }}">Guru</a></li>
                     <li class="nav-item"><a class="nav-link" href="{{url('/album')}}">Album</a></li>
                     <li class="nav-item"><a class="nav-link" href="{{url('/kontak')}}">Kontak</a></li>
                 </ul>
                 {{-- <ul class="nav navbar-nav navbar-right">
                     <li><a class="hover-btn-new log orange" href="#" data-toggle="modal"
                             data-target="#login"><span>Login Admin</span></a></li>
                 </ul> --}}
             </div>
         </div>
     </nav>
 </header>
 <!-- End header -->
