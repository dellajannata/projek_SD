@extends('layouts.main')
@section('layouts.content')
<div class="all-title-box">
    
</div>

<div id="overviews" class="section wb">
    <div class="container text-center">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h2>PROJEK PENGUATAN PROFIL PELAJAR PANCASILA</p>
                <p>UPT SD Negeri 108 Gresik</p>
            </div>
        </div><!-- end title -->

    </div>
    <div class="container">
        <hr class="invis"> 
        <div class="row " > 
            @foreach ($projekP5 as $p5)
            <div class="col-lg-4 col-md-6 col-12">
                <a href="{{ url('detailP5') }}/{{ $p5->id }}">
                <div class="course-item">
                    <div class="image-blog">
                        <img src="{{ asset('storage/projekP5/' . $p5->image) }}" style="width:620px;height:230px;" alt="" class="img-fluid">
                    </div>
                    <div class="course-br" >
                        <div class="course-title"style="height: 25px;text-align: center; font-size:20px;">
                            <b>{{$p5->namaKegiatan}}</b>
                        </div>
                        <div class="course-desc" style="height: 50px;text-align: center">
                            <p >{!! Illuminate\Support\Str::of($p5->deskripsi)->words(5) !!}</p>
                        </div>
                    </div>
                    <div class="course-meta-bot">
                        <ul>
                            <li style="font-size:14px">{{$p5->tanggal}}</li>
                        </ul>
                    </div>
                </div>
                </a>
                <br><br>

            </div><!-- end col -->
            
            @endforeach
            
            </div>
    </div><!-- end container -->

    <div class="d-flex justify-content-center">
        {!! $projekP5->links() !!}
    </div>
</div><!-- end section -->
</div>
@endsection