@extends('layouts.main')
@section('layouts.content')
<div class="all-title-box">
</div>
<br><br><br>
<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('img/fotbar.jpg');">
    <div class="container">
        <div class="section-title text-center">
            <h3>GURU</h3>
            <p>UPT SD Negeri 108 Gresik</p>
        </div>
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
<br><br><br>
@endsection