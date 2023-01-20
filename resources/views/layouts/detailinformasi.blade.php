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
                        <img src="{{ asset('storage/informasi/' . $i->image) }}" style="width:770px;height:410px;
                    ">
                    </div>
                    <div class="post-content">
                        <div class="blog-desc">
                            <br>
                            <h3 class="title">{!! $i->deskripsi !!}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
                
                        </div><!-- end col -->
            <div class="col-lg-3 col-12 right-single">
                <div class="widget-categories">
                    <h3 class="widget-title">Informasi Link</h3>
                    <ul>
                        <li><a href="{{ url('beranda') }}">Beranda</a></li>
                        <li><a href="{{ url('tentang') }}">Tentang Kami</a></li>
                        <li><a href="{{ url('kelas') }}">Kelas</a></li>
                        <li><a href="{{ url('sarana') }}">Sarana Prasarana</a></li>
                        <li><a href="{{ url('guru') }}">Guru</a></li>
                        <li><a href="{{ url('album') }}">Album</a></li>
                        <li><a href="{{ url('kontak') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

@endsection