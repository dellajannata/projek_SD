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
                                class="img-fluid img-rounded" style="width:800px;height:400px;">
                        </div><!-- end media -->
                    </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="{{ asset('storage/tentangkami/' . $tentangkami->gambar) }}" alt=""
                                class="img-fluid img-rounded"style="width:800px;height:400px;" >
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
@endsection
