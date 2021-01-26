@extends('backend.app')

@section('content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Admin Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ URL('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info"><i class="fa fa-book"></i></div>
                        <div class="m-l-10 align-self-center">
                            {{-- <h3 class="m-b-0 font-light">{{ $buku }}</h3> --}}
                            <h5 class="text-muted m-b-0">Kategori</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-warning"><i class="fa fa-users"></i></div>
                        <div class="m-l-10 align-self-center">
                            {{-- <h3 class="m-b-0 font-lgiht">{{ $anggota }}</h3> --}}
                            <h5 class="text-muted m-b-0">Pengguna</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-primary"><i class="fa  fa-bar-chart-o"></i></div>
                        <div class="m-l-10 align-self-center">
                            {{-- <h3 class="m-b-0 font-lgiht">{{$peminjaman}}</h3> --}}
                            <h5 class="text-muted m-b-0">Video</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-primary"><i class="fa  fa-bar-chart-o"></i></div>
                        <div class="m-l-10 align-self-center">
                            {{-- <h3 class="m-b-0 font-lgiht">{{$peminjaman}}</h3> --}}
                            <h5 class="text-muted m-b-0">Video</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->

    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
</div>
@endsection