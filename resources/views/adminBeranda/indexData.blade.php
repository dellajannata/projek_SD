@extends('adminBeranda.mainData')
@section('adminBeranda.content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-home"></i>
                    </span> Dashboard
                </h3>
            </div>
            <div class="row">
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <a href="{{ url('crudguru') }}">
                                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Jumlah Guru
                            </a><i class="mdi mdi-chart-line mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{ $guru }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Weekly Orders <i
                                    class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">45,6334</h2>
                            <h6 class="card-text">Decreased by 10%</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Visitors Online <i
                                    class="mdi mdi-diamond mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">95,5741</h2>
                            <h6 class="card-text">Increased by 5%</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">INFORMASI TERBARU</h4>
                            @forelse ($informasi as $i)
                                <div class="row mt-3">
                                    <div class="col-6 pe-1">
                                        <img src="{{ asset('storage/informasi/' . $i->image) }}" class="rounded"
                                            style="width: 250px; height:220px">
                                    </div>
                                    <div>{!! Illuminate\Support\Str::of($i->deskripsi)->words(10) !!} </div>
                                </div>
                        </div>
                    @empty
                        <div class="alert alert-danger">
                            Informasi terbaru belum tersedia.
                        </div>
                        @endforelse
                        <div class="row text-center" >
                        {{ $informasi->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
