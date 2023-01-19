@extends('layouts.main')
@section('layouts.content')
    <div class="all-title-box">
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>Sarana Prasarana</h3>
                        <p>UPT SD Negeri 108 Gresik</p>
                    </div>
                </div><!-- end title -->
            </div><!-- end title -->

            <hr class="invis">

            <div id="overviews" class="section wb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div class="tab-pane active fade show" id="tab1">
                                    <div class="row text-center">
                                        @foreach ($saranaPrasarana as $sp)
                                            <div class="col-md-4">
                                                <div class="pricing-table pricing-table-highlighted">
                                                    <img src="{{ asset('storage/saranaPrasarana/' . $sp->image) }}"
                                                    style="width: 250px;
                                        height: 200px;">
                                                    <div class="pricing-table-features">
                                                       
                                                    </div>
                                                    <div class="pricing-table-space"></div>
                                                    <div class="pricing-table-header grd1">
                                                        <h3 class="title">{{ $sp->namaSarana }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div><!-- end row -->
                                    <hr class="invis">
                                    <div class="d-flex justify-content-center">
                                        {!! $saranaPrasarana->links() !!}
                                    </div>
                                </div><!-- end pane -->
                            </div><!-- end content -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div>

            <br><br><br>

        </div><!-- end container -->
    </div><!-- end section -->
@endsection
