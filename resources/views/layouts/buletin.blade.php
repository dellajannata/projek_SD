@extends('layouts.main')
@section('layouts.content')
    <div class="all-title-box">
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>E-BULETIN</h3>
                    <p>UPT SD Negeri 108 Gresik</p>
                </div>
            </div><!-- end title -->
            <div class="row">
                @foreach ($buletin as $bt)
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="{{ url('detailbuletin') }}/{{ $bt->id }}">
                            <div class="blog-item">

                                <div class="image-blog">
                                    <img src="{{ asset('storage/buletin/' . $bt->gambar) }}" alt=""
                                        class="img-fluid" style="width:680px;height:320px;">
                                </div>
                                <div class="meta-info-blog">
                                    <span><i class="fa fa-calendar"></i> <a
                                            href="{{ url('detailbuletin') }}/{{ $bt->id }}">{{ $bt->tanggal }}</a>
                                    </span>
                                </div>
                                <div class="blog-title" style="height: 50px">
                                    <h2><a href="{{ url('detailbuletin') }}/{{ $bt->id }}">{{ $bt->judul }}</a>
                                    </h2>
                                </div>
                                <div class="blog-desc" style="height: 100px">
                                    <span class="title" style="height:700px text-align: justify"><a
                                            href="{{ url('detailbuletin') }}/{{ $bt->id }}">{!! Illuminate\Support\Str::of($bt->deskripsi)->words(6) !!}</a></span>
                                </div>
                                <div class="blog-button">
                                    <a class="hover-btn-new orange"
                                        href="{{ url('detailbuletin') }}/{{ $bt->id }}"><span>Baca
                                            Selengkapnya<span></a>
                                </div>
                                <br>
                            </div><!-- end col -->
                            <br>
                    </div><!-- end row -->
                @endforeach
                <div class="d-flex justify-content-center">
                    {!! $buletin->links() !!}
                </div>
            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection
