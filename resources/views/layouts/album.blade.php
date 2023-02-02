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

            <div class="row">
                <div class="col-md-12">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked " id="myTabs">
                            <li><a class="active" href="#tab1" data-toggle="pill">Album Foto</a></li>
                            <li><a href="#tab2" data-toggle="pill">Album Video</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show h-auto" id="tab1">
                            <div class="row text-center h-auto">
                                @foreach ($album as $ab)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="course-item">
                                            <div class="image-blog">
                                                <img src="{{ asset('storage/album/' . $ab->image) }}"
                                                    style="width:620px;height:230px;" alt="" class="img-fluid">
                                            </div>
                                            <div class="course-br">
                                                <div class="course-title h-75">
                                                    <p style="height: 60px;text-align: center; font-size:20px">
                                                        {{ $ab->judul }}</p>
                                                </div>
                                            </div>
                                            <div class="course-meta-bot">
                                                <ul>
                                                    <li style="font-size:14px">{{ $ab->tanggal }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br><br>
                                    </div><!-- end col -->
                                @endforeach
                            </div><!-- end row -->
                            <br><br>
                            <div class="d-flex justify-content-center">
                                {!! $album->links() !!}
                            </div>
                        </div><!-- end pane -->

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center h-auto">
                                @foreach ($albumvideo as $ab)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="course-item">
                                            <div class="image-blog">
                                                <video controls src="{{ asset('storage/albumvideo/' . $ab->video) }}"
                                                    style="width:340px;height:220px;" type="video/webm">
                                                </video>
                                            </div>
                                            <div class="course-br">
                                                <div class="course-title h-75">
                                                    <p style="height: 60px;text-align: center; font-size:20px">
                                                        {{ $ab->judul }}</p>
                                                </div>
                                            </div>
                                            <div class="course-meta-bot">
                                                <ul>
                                                    <li style="font-size:14px">{{ $ab->tanggal }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br><br>
                                    </div><!-- end col -->
                                @endforeach
                            </div><!-- end row -->
                            <div class="d-flex justify-content-center">
                                {!! $albumvideo->links() !!}
                            </div>
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    </div>
@endsection
