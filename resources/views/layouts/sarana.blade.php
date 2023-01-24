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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div class="tab-pane active fade show " id="tab1">
                                    <div class="row text-center h-auto">
                                        @foreach ($saranaPrasarana as $sp)
                                            <div class="col-md-4">
                                                {{-- <a href="{{ url('detailinformasi') }}/{{ $i->id }}"> --}}
                                                    <div class="pricing-table pricing-table-highlighted">
                                                        <div class="pricing-table-features">
                                                            <img src="{{ asset('storage/saranaPrasarana/' . $sp->image) }}"
                                                                class="rounded img-fluid" style="height: 200px; width: 300px;">
                                                        </div>
                                                        <div class="pricing-table-header grd1">
                                                            <h3 class="title" style="height: 30px;">{{ $sp->namaSarana }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </a>
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

            <br><br><br>

        </div><!-- end container -->
    </div><!-- end section -->
@endsection
