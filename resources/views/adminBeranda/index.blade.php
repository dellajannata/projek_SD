@extends('adminBeranda.main')
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
                        <a href="{{ url('crudwalikelas') }}">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute"
                                alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Jumlah Siswa
                        </a><i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $jmlhSiswa }}</h2>
                        {{-- @foreach($wk as $kategoris)
                        @php $arrayjumlah = array(); @endphp
                        @foreach($kategoris->informasi->where('jmlh_siswa',1) as $jumlah)
                        @php $arrayjumlah[] = $jumlah @endphp
                        @endforeach

                        @php $jum = count($arrayjumlah); @endphp
                        <span><a href="#"> {{ $kategoris->nm_kategori }} : {{ $jum }} </a></span>
                        @endforeach --}}

                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <a href={{url('/informasisd')}}>
                        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Jumlah Informasi Terbaru<i
                                class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                    </a>
                        <h2 class="mb-5">{{$jumlah}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection