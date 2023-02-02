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
                    <div id="home" class="first-section" style="background-image:url('images/depan.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-right">
                                        <div class="big-tagline">
                                            <marquee width="1000" height="100">
                                                <h2><strong>Selamat Datang di UPT SD Negeri 108 Gresik </strong> Sekolah
                                                    Sang Juara</h2>
                                            </marquee>
                                            <p class="lead">Jl. Desa, Kedungsekar, Kec. Benjeng, Kabupaten
                                                Gresik, Jawa Timur 61172</p>
                                            <a href="{{ url('tentang') }}"
                                                class="hover-btn-new"><span>Selengkapnya</span></a>

                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('img/fotbar.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-left">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight">UPT SD Negeri <strong>108
                                                    Gresik</strong></h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Jl. Desa,
                                                Kedungsekar, Kec. Benjeng, Kabupaten Gresik, Jawa Timur 61172</p>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('images/gerbang.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight"><strong>UPT SD Negeri</strong> 108
                                                Gresik</h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Jl. Desa,
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
            <div class="container page-body-wrapper">
                <div class="row">
                    <div class="col-lg-9 blog-post-single">
                        <div class="section-title row text-center">
                            <div class="col-sm-12">
                                <h3>INFORMASI</h3>
                            </div>
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-sm-12">
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
                            <div class="col-sm-12">
                                <div class="tab-content">
                                    <div class="tab-pane active fade show h-auto" id="tab1">
                                        <div class="row text-center h-auto">
                                            @foreach ($informasisd as $i)
                                                <div class="col-md-4">
                                                    <a href="{{ url('detailinformasi') }}/{{ $i->id }}">
                                                        <div class="pricing-table pricing-table-highlighted">
                                                            <div class="pricing-table-features">
                                                                <img src="{{ asset('storage/informasi/' . $i->image) }}"
                                                                    class="rounded img-fluid"
                                                                    style="height: 150px; width: 400px;">
                                                            </div>
                                                            <div class="pricing-table-header grd1">
                                                                <h3 class="title" style="height: 30px;">
                                                                    {!! Illuminate\Support\Str::of($i->deskripsi)->words(5) !!}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div><!-- end row -->
                                        <br><br>
                                        <div class="d-flex justify-content-center">
                                            {!! $informasisd->links() !!}

                                        </div>
                                    </div><!-- end pane -->

                                    <div class="tab-pane fade" id="tab2">
                                        <div class="row text-center h-auto">
                                            @foreach ($informasiLomba as $il)
                                                <div class="col-md-4">
                                                    <a href="{{ url('detailLomba') }}/{{ $il->id }}">
                                                        <div class="pricing-table pricing-table-highlighted">
                                                            <div class="pricing-table-features">
                                                                <img src="{{ asset('storage/informasiLomba/' . $il->image) }}"
                                                                    class="rounded img-fluid"
                                                                    style="height: 200px; width: 300px;">
                                                            </div>
                                                            <div class="pricing-table-header grd1">
                                                                <h3 class="title" style="height: 30px;">
                                                                    {!! Illuminate\Support\Str::of($il->deskripsi)->words(5) !!}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div><!-- end row -->
                                        <div class="d-flex justify-content-center">
                                            {!! $informasiLomba->links() !!}
                                        </div>
                                    </div><!-- end pane -->
                                </div><!-- end content -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                    <div class="col-lg-3 col-6 right-single">
                        <div class="widget-categories">
                            <h3 class="widget-title">INFORMASI LINK</h3>
                            <ul class="footer-links">
                                <li><a href="{{ url('tentang') }}">TENTANG KAMI</a></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">KELAS
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
                                <li><a href="{{ url('sarana') }}">SARANA PRASARANA</a></li>
                                <li><a href="{{ url('guru') }}">GURU</a></li>
                                <li><a href="{{ url('album') }}">ALBUM</a></li>
                                <li><a href="{{ url('kontak') }}">KONTAK</a></li>
                            </ul><!-- end links -->  
                            <br>      
                            <ul>
                                <h3 class="widget-title">LINK TERKAIT</h3>
                                @foreach ($InformasiLink as $ilink)
                                <li>{!! $ilink->keterangan !!}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br>
                        {{-- <div class="widget-categories">
                            <h3 class="widget-title">STATISTIK PENGUNJUNG</h3>
                            <ul>
                                @foreach ($InformasiLink as $ilink)
                                <li>{!! $ilink->keterangan !!}</li>
                                @endforeach
                            </ul>
                        </div> --}}
                    </div>
                </div>
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
                            <a href="{{ url('detailPembiasaan') }}/{{ $p->id }}">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="{{ asset('storage/pembiasaan/' . $p->image) }}" alt=""
                                            class="img-fluid" style="max-width:260px;max-height:150px;">
                                    </div>
                                    <br>
                                    <div class="blog-title">
                                        <h3><b>{{ $p->namaKegiatan }}</b></h3>
                                    </div>
                                    <div class="blog-desc">
                                        <h3 class="title"><a
                                                href="{{ url('detailPembiasaan') }}/{{ $p->id }}">{!! Illuminate\Support\Str::of($p->deskripsi)->words(5) !!}</a>
                                        </h3>
                                    </div>
                                </div>
                            </a>
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
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
                                class="flaticon-study"></i></span>
                        <p class="stat_count">{{ $guru }}</p>
                        <h3>Guru</h3>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
                                class="flaticon-online"></i></span>
                        <p class="stat_count">{{ $jmlhSiswa }}</p>
                        <h3>Jumlah Siswa</h3>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    @endsection