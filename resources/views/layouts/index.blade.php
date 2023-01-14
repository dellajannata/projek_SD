@extends('layouts.main')
@section('layouts.content')

    <body class="host_version">
        <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover"
            data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-right">
                                        <div class="big-tagline">
                                            <h2><strong>UPT SD Negeri </strong> 108 Gresik</h2>
                                            <p class="lead">Jl. raya desa, Klampok, Kedungsekar, Kec. Benjeng, Kabupaten
                                                Gresik, Jawa Timur 61172</p>
                                            <a href="tentang" class="hover-btn-new"><span>Selengkapnya</span></a>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-left">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight">UPT SD Negeri <strong>108
                                                    Gresik</strong></h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Jl. raya desa, Klampok,
                                                Kedungsekar, Kec. Benjeng, Kabupaten Gresik, Jawa Timur 61172</p>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight"><strong>UPT SD Negeri</strong> 108
                                                Gresik</h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Jl. raya desa, Klampok,
                                                Kedungsekar, Kec. Benjeng, Kabupaten Gresik, Jawa Timur 61172</p>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <!-- Left Control -->
                <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button"
                    data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <!-- Right Control -->
                <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button"
                    data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div id="overviews" class="section wb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>INFORMASI</h3>
                        {{-- <p class="lead">Salah satu satuan pendidikan dengan jenjang SD di Kedungsekar, Kec. Benjeng, Kab. Gresik, Jawa Timur. Yang berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.</p> --}}
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="message-box">
                            <ul class="nav nav-pills nav-stacked" id="myTabs">
                                <li><a class="active" href="#tab1" data-toggle="pill">UPT SDN 108 Gresik</a></li>
                                <li><a href="#tab2" data-toggle="pill">LOMBA</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div>

                <hr class="invis">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active fade show" id="tab1">
                                <div class="row text-center">
                                    @foreach ($informasisd as $i)
                                        <div class="col-md-4">
                                            <div class="pricing-table pricing-table-highlighted">
                                                <div class="pricing-table-features">
                                                    <img src="{{ asset('storage/informasi/' . $i->image) }}"
                                                        style="width:260px;height:200px;
                                                ">
                                                </div>
                                                <div class="pricing-table-space"></div>
                                                <div class="pricing-table-header grd1">
                                                    <h3 class="title"><a href="detailinformasi">{!! Illuminate\Support\Str::of($i->deskripsi)->words(3) !!}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div><!-- end row -->
                                <hr class="invis">

                                <div class="row ">
                                    {{ $informasisd->links() }}
                                </div>
                            </div><!-- end pane -->

                            <div class="tab-pane fade" id="tab2">
                                <div class="row text-center">
                                    @foreach ($informasiLomba as $i)
                                        <div class="col-md-4">
                                            <div class="pricing-table pricing-table-highlighted">
                                                <div class="pricing-table-features">
                                                    <img src="{{ asset('storage/informasiLomba/' . $i->image) }}"
                                                        style="width:260px;height:200px;">
                                                </div>
                                                <div class="pricing-table-space"></div>
                                                <div class="pricing-table-header grd1">
                                                    <h3 class="title"><a href="detailLomba">{!! Illuminate\Support\Str::of($i->deskripsi)->words(3) !!}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div><!-- end row -->
                                <hr class="invis">

                                <div class="row ">
                                    {{ $informasiLomba->links() }}
                                </div>
                            </div><!-- end pane -->
                        </div><!-- end content -->
                    </div><!-- end col -->

                </div><!-- end row -->
            </div>
        </div>
        <br><br><br>
        <section class="section lb page-section">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>Kegiatan Pembiasaan</h3>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    @foreach ($pembiasaan as $p)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="blog-item">
                                <div class="image-blog">
                                    <img src="{{ asset('storage/pembiasaan/' . $p->image) }}" alt=""
                                        class="img-fluid" style="width:260px;height:200px;">
                                </div>
                                <div class="blog-title">
                                    <h2>{{ $p->namaKegiatan }}</h2>
                                </div>
                                <div class="blog-desc">
                                    <h3 class="title"><a href="detailPembiasaan">{!! Illuminate\Support\Str::of($p->deskripsi)->words(3) !!}</a></h3>

                                </div>
                                {{-- <div class="blog-button">
                                    <a class="hover-btn-new orange" href="#"><span>Read More<span></a>
                                </div> --}}
                            </div>
                        </div><!-- end col -->
                    @endforeach
                </div><!-- end row -->


            </div>
            <hr class="invis">

            <div class="row ">
                {{ $pembiasaan->links() }}
            </div>
        </section><!-- end section -->

        <div class="section cl">
            <div class="container">
                <div class="row text-left stat-wrap">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
                                class="flaticon-study"></i></span>
                        <p class="stat_count">12000</p>
                        <h3>Students</h3>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
                                class="flaticon-online"></i></span>
                        <p class="stat_count">240</p>
                        <h3>Courses</h3>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
                                class="flaticon-years"></i></span>
                        <p class="stat_count">55</p>
                        <h3>Years Completed</h3>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="plan" class="section lb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Choose Your Plan</h3>
                    <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. </p>
                </div><!-- end title -->
            </div><!-- end container -->
        </div><!-- end section -->
    @endsection
