@extends('layouts.main')
@section('layouts.content')
<div class="all-title-box">
    
</div>

<div id="overviews" class="section wb">
    <div class="container text-center">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>Album</h3>
                <p>UPT SD Negeri 108 Gresik</p>
            </div>
        </div><!-- end title -->

    </div>
    <div class="container">
        <hr class="invis"> 
        <div class="row"> 
            @foreach ($album as $ab)
            <div class="col-lg-6 col-md-6 col-12">
                <div class="course-item">
                    <div class="image-blog">
                        <img src="{{ asset('storage/album/' . $ab->image) }}" style="width:800px;height:300px;" alt="" class="img-fluid">
                    </div>
                    <div class="course-br">
                        <div class="course-title">
                            <h2>{{$ab->judul}}</h2>
                        </div>
                        <div class="course-desc">
                        </div>
                    </div>
                    <div class="course-meta-bot">
                        <ul>
                            <li>{{$ab->tanggal}}</li>
                        </ul>
                    </div>
                </div>
                <br><br>
            </div><!-- end col -->
            
            @endforeach
    </div><!-- end container -->
    <br><br>
    {{ $album->links() }}
</div><!-- end section -->
@endsection