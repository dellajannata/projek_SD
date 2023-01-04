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
                                            <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="tentang" class="hover-btn-new"><span>Read More</span></a>
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
                                            <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="hover-btn-new"><span>Read More</span></a>
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
                                            <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="hover-btn-new"><span>Read More</span></a>
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
                                                        style="width: 100%;
                                                height: 100%;">
                                                </div>
                                                <div class="pricing-table-space"></div>
                                                <div class="pricing-table-header grd1">
                                                    <h3 class="title">{{ $i->deskripsi }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div><!-- end row -->
                            </div><!-- end pane -->

                            <div class="tab-pane fade" id="tab2">
                                <div class="row text-center">
                                    @foreach ($informasiLomba as $i)
                                        <div class="col-md-4">
                                            <div class="pricing-table pricing-table-highlighted">
                                                <div class="pricing-table-features">
                                                    <img src="{{ asset('storage/informasiLomba/' . $i->image) }}"
                                                        style="width: 100%;
                                                height: 100%;">
                                                </div>
                                                <div class="pricing-table-space"></div>
                                                <div class="pricing-table-header grd1">
                                                    <h3 class="title">{{ $i->deskripsi }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div><!-- end row -->
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="our-team">
                                <div class="team-img">
                                    <img src="{{ asset('storage/pembiasaan/' . $p->image) }}">
                                </div>
                                <div class="team-content">
                                    <h3 class="title">{{ $p->namaKegiatan }}</h3>
                                    <p class="post">{{ $p->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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

        <div id="testimonials" class="parallax section db parallax-off"
            style="background-image:url('images/parallax_04.jpg');">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Testimonials</h3>
                    <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. </p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testi-carousel owl-carousel owl-theme">
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_01.png" alt="" class="img-fluid">
                                    <h4>James Fernando </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                    <p class="lead">They have got my project on time with the competition with a sed
                                        highly skilled, and experienced & professional team.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_02.png" alt="" class="img-fluid">
                                    <h4>Jacques Philips </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                    <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure
                                        and
                                        praising pain was born and I will give you completed.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_03.png" alt="" class="img-fluid ">
                                    <h4>Venanda Mercy </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes
                                        avoids
                                        pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_01.png" alt="" class="img-fluid">
                                    <h4>James Fernando </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                    <p class="lead">They have got my project on time with the competition with a sed
                                        highly skilled, and experienced & professional team.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_02.png" alt="" class="img-fluid">
                                    <h4>Jacques Philips </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                    <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure
                                        and
                                        praising pain was born and I will give you completed.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_03.png" alt="" class="img-fluid">
                                    <h4>Venanda Mercy </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes
                                        avoids
                                        pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                                <!-- end testi-meta -->
                            </div><!-- end testimonial -->
                        </div><!-- end carousel -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        {{--  <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->  --}}
    @endsection
