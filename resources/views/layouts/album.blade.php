@extends('layouts.main')
@section('layouts.content')
<div class="all-title-box">
    <div class="container text-center">
        <h1>Album<span class="m_1">UPT SD Negeri 108 Gresik</span></h1>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container">
        <hr class="invis"> 
        <div class="row"> 
            @foreach ($album as $ab)
            <div class="col-lg-4 col-md-6 col-12" >
                <div class="blog-item">
                    <div class="image-blog">
                        <img src="{{ asset('storage/album/' . $ab->image) }}" style="max-width:300px;max-height:200px;float:left;" alt="" class="img-fluid">
                    </div>
                    <div class="blog-title">
                        <h2><a>{{ $ab->judul }}</a></h2>
                    </div>
                    <div class="blog-button">
                        <a class="hover-btn-new orange" href="#"><span>Read More<span></a>
                    </div>
                </div>
                <br>
            </div><!-- end col -->
            @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
    {{ $album->links() }}
</div><!-- end section -->
@endsection