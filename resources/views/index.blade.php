@extends('layout.layout')

@section('title', 'IKK | Dashboard')

@section('navbar')
    @include('layout.navbar')
@endsection

@section('content')


    <!-- /.row -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard IKK UPI</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>


    {{-- layout --}}

    {{-- main layout --}}
    <div class="row m-2">
        <!-- First Quick Statistik for UPA (Single Row) -->
        <div class="col-lg-12 col-md-12 mb-2">
            <div class="card shadow border-rounded">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-project-diagram"></i>
                        Unit Pelaksanaan Admnisitrasi
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <!-- Box for Biro SDM -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <a href="#">
                                <div class="small-box d-flex text-center flex-column justify-content-center align-items-center"
                                    style="min-height: 150px;">
                                    <div class="ikon">
                                        <i class="fas fa-users" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="inner">
                                        <p>Biro SDM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Box for Biro Sarpas -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <a href="/sarpras">
                                <div class="small-box d-flex text-center flex-column justify-content-center align-items-center"
                                    style="min-height: 150px;">
                                    <div class="ikon">
                                        <i class="fas fa-cogs" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="inner">
                                        <p>Biro Sarpas</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Quick Statistik for UPP (Single Row) -->
        <div class="col-lg-12 col-md-12 mb-2">
            <div class="card shadow border-rounded">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-project-diagram"></i>
                        unit Pelaksana Pengembangan
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <!-- Box for Dewan Guru Besar -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <a href="#">
                                <div class="small-box d-flex text-center flex-column justify-content-center align-items-center"
                                    style="min-height: 150px;">
                                    <div class="ikon">
                                        <i class="fas fa-chalkboard-teacher" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="inner">
                                        <p>Dewan Guru Besar</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Box for LPPM -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <a href="#">
                                <div class="small-box d-flex text-center flex-column justify-content-center align-items-center"
                                    style="min-height: 150px;">
                                    <div class="ikon">
                                        <i class="fas fa-flask" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="inner">
                                        <p>LPPM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Box for Direktorat STI -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <a href="#">
                                <div class="small-box d-flex text-center flex-column justify-content-center align-items-center"
                                    style="min-height: 150px;">
                                    <div class="ikon">
                                        <i class="fas fa-laptop-code" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="inner">
                                        <p>Direktorat STI</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Box for Direktorat RENOR -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <a href="#">
                                <div class="small-box d-flex text-center flex-column justify-content-center align-items-center"
                                    style="min-height: 150px;">
                                    <div class="ikon">
                                        <i class="fas fa-chart-line" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="inner">
                                        <p>Direktorat RENOR</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Box for Direktorat Keuangan -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <a href="#">
                                <div class="small-box d-flex text-center flex-column justify-content-center align-items-center"
                                    style="min-height: 150px;">
                                    <div class="ikon">
                                        <i class="fas fa-money-bill-wave" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="inner">
                                        <p>Direktorat Keuangan</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end layout --}}



@endsection
