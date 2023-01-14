@extends('layouts.main')
@section('layouts.content')
<div class="all-title-box">
</div>

<div id="overviews" class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 blog-post-single">
                @foreach ($detailLomba as $i)
                <div class="blog-item">
                    <div class="image-blog">
                        <img src="{{ asset('storage/informasiLomba/' . $i->image) }}" style="width:770px;height:410px;
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
                <div class="widget-search">
                    <div class="site-search-area">
                        <form method="get" id="site-searchform" action="#">
                            <div>
                                <input class="input-text form-control" name="search-k" id="search-k"
                                    placeholder="Search keywords..." type="text">
                                <input id="searchsubmit" value="Search" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
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
<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('img/fotbar.jpg');">
    <div class="container">
        <div class="section-title text-center">
            <h3>GURU</h3>
            <p>UPT SD Negeri 108 Gresik</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                    @foreach ($guru as $gr)
                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="{{ asset('storage/guru/' . $gr->image) }}" alt="" class="img-fluid" style="max-width:160px;max-height:200px;"
                            >
                            <h4>{{ $gr->nama }}</h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i>{{$gr->jenisPTK}}</h3>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    @endforeach
                    <!-- end testimonial -->
                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

@endsection