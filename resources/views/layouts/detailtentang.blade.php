@extends('layouts.main')
@section('layouts.content')
<div class="all-title-box">
</div>

<div id="overviews" class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 blog-post-single">
                @foreach ($detailTentang as $t)
                <div class="blog-item">
                    <div class="image-blog">
                        <img src="{{ asset('storage/tentangkami/' . $t->gambar) }}" style="width:770px;height:410px;
                    ">
                    </div>
                    <div class="post-content">
                        <div class="blog-desc">
                            <br>
                            <h3 class="title"><b>{!! $t->judul !!}</b></h3>
                            <h3 class="title">{!! $t->deskripsi !!}</h3>
                        </div>
                    </div>
                </div>
                @endforeach

            </div><!-- end col -->
            <div class="col-lg-3 col-12 right-single">
                <div class="widget-categories">
                    <h3 class="widget-title">Informasi Link</h3>
                    <ul>
                        <li><a href="beranda">Beranda</a></li>
                        <li><a href="tentang">Tentang Kami</a></li>
                        <li><a href="kelas">Kelas</a></li>
                        <li><a href="sarana">Sarana Prasarana</a></li>
                        <li><a href="guru">Guru</a></li>
                        <li><a href="album">Album</a></li>
                        <li><a href="kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

@endsection