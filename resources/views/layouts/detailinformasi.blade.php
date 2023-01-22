@extends('layouts.main')
@section('layouts.content')
    <div class="all-title-box">
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 blog-post-single">
                    @foreach ($detailinformasi as $i)
                        <div class="blog-item">
                            <div class="image-blog">
                                <img src="{{ asset('storage/informasi/' . $i->image) }}">
                            </div>
                            <div class="post-content">
                                <div class="blog-desc">
                                    <br>
                                    <h3 class="title" style="text-align: justify">{!! $i->deskripsi !!}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div><!-- end col -->
                <div class="col-lg-3 col-12 right-single">
                    <div class="widget-categories">
                        <h3 class="widget-title">Informasi Link</h3>
                        <ul>
                            <li><a href="{{ url('/beranda') }}">Beranda</a></li>
                            <li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Kelas
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                    <a class="dropdown-item" href="{{ url('/kelas') }}">Kelas 1</a>
                                    <a class="dropdown-item" href="{{ url('/kelas2') }}">Kelas 2</a>
                                    <a class="dropdown-item" href="{{ url('/kelas3') }}">Kelas 3</a>
                                    <a class="dropdown-item" href="{{ url('/kelas4') }}">Kelas 4</a>
                                    <a class="dropdown-item" href="{{ url('/kelas5') }}">Kelas 5</a>
                                    <a class="dropdown-item" href="{{ url('/kelas6') }}">Kelas 6</a>
                                </div>
                            </li>
                            <li><a href="{{ url('/sarana') }}">Sarana Prasarana</a></li>
                            <li><a href="{{ url('/guru') }}">Guru</a></li>
                            <li><a href="{{ url('/album') }}">Album</a></li>
                            <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
