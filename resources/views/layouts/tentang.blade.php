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
            @foreach ($tentang as $tentangkami)
            <div class="row align-items-center">
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
            </div>
            <div class="row align-items-center">
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
            </div><!-- end row -->
            @endforeach
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
