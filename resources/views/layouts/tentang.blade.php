@extends('layouts.main')
@section('layouts.content')
    <div class="all-title-box">
    </div>

    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>UPT SD Negeri 108 Gresik</h3>
                    <p class="lead">Salah satu satuan pendidikan dengan jenjang SD di Kedungsekar, Kec. Benjeng, Kab.
                        Gresik, Jawa Timur. Yang berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.
                    </p>
                </div>
            </div><!-- end title -->

            <div class="row align-items-center">
                @foreach ($tentang as $tentangkami)
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h4 class="title">{{ $tentangkami->judul }}</h4>
                            <p class="post">{!! $tentangkami->deskripsi !!}</p>
                            <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="{{ asset('storage/tentangkami/' . $tentangkami->gambar) }}" alt=""
                                class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->
                @endforeach
            </div>
            <div class="row align-items-center">
                @foreach ($tentang as $tentangkami)
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="{{ asset('storage/tentangkami/' . $tentangkami->gambar) }}" alt=""
                                class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->
 
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h2 class="title">{{ $tentangkami->judul }}</h2>
                                <p class="post">{!! $tentangkami->deskripsi !!}</p>
                                <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->
                @endforeach
            </div><!-- end row -->
			</div>
        </div><!-- end container -->
        {{ $tentang->links() }}
    </div><!-- end section -->

    <div class="hmv-box">
        <div class="container">
            <div class="row">
                @foreach ($visimisi as $vm)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="inner-hmv">
                        {{-- <div class="icon-box-hmv"><i class="flaticon-achievement"></i></div> --}}
                        <h3 class="title">{{ $vm->judul }}</h3>
                        <span class="post">{!! $vm->deskripsi !!}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Teachers</h3>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/khoiri.jpg" alt="" class="img-fluid">
                                <h4>Mochamad Khoiri</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/lilik afnani.jpg" alt="" class="img-fluid ">
                                <h4>Lilik Afnani</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                    pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/novitasari.jpg" alt="" class="img-fluid">
                                <h4>Novitasari</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly
                                    skilled, and experienced & professional team.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/SITI NAIMAH.jpg" alt="" class="img-fluid">
                                <h4>Siti Naimah</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/SIYAMU UMARO.jpg" alt="" class="img-fluid">
                                <h4>Siyamu Umaro</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
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
