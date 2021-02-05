@extends('frontend.app')

@section('content')
<!-- Trending Area Start -->
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <span class="trending-tittle" style="padding-bottom: 1px">
                        <strong>Video Terbaru</strong>
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                @foreach ($dataHeadline as $headline)
                                <li class="news-item">{{ $headline->tulisan }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            @foreach ($videoTerbaru as $video)
                            @if ($video->cover != null)
                            <img src="{{ URL('../storage/'.$video->thumbnail)}}" alt="">
                            @elseif ($video->cover == null)
                            <img src="{{ $video->thumbnail }}" alt="">
                            @endif
                            <div class="trend-top-cap">
                                <span><a style="color:black" href="{{ route('show.category', $video->category->slug) }}">{{ $video->category->name }}</a></span>
                                <h2><a href="{{ route('show.video', $video->slug) }}">{{ $video->title }}</a></h2>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach ($videoTerbaruBawah as $video)
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        @if ($video->cover != null)
                                        <img src="{{ URL('../storage/'.$video->thumbnail)}}" alt="">
                                        @elseif ($video->cover == null)
                                        <img src="{{ $video->thumbnail }}" alt="">
                                        @endif
                                    </div>
                                    <div class="trend-bottom-cap">
                                        @if ( $video->category_id == '1') 
                                        <span class="color1">
                                        @else
                                        <span class="color2">
                                        @endif
                                        <a style="color:black" href="{{ route('show.category', $video->category->slug) }}">{{ $video->category->name }}</a></span>
                                        <h4><a href="{{ route('show.video', $video->slug) }}">{{ $video->title }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Right content -->
                <div class="col-lg-4 col-md-12">
                    <h4 class="mb-3">Jadwal Hari Ini</h4>
                    <?php $tgl = Carbon\Carbon::now() ?> 
                    <h5 class="my-1">{{ Carbon\Carbon::parse($tgl)->translatedFormat("l, d F Y") }}</h5>
                    {{-- @foreach ($videoTerbaruKanan as $video) --}}
                    <div class="trand-right-single d-flex">
                        {{-- <div class="trand-right-img">
                            <img style="width: 150px" src="{{ $video->thumbnail }}" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1"><a style="color:black" href="{{ route('show.category', $video->category->slug) }}">{{ $video->category->name }}</a></span>
                            <h4><a href="{{ route('show.video', $video->slug) }}">{{ $video->title }}</a></h4>
                        </div> --}}
                        <?php $hari = Carbon\Carbon::parse($tgl)->translatedFormat("l") ?>
                        @if ($hari == 'Senin')
                        <div class="progress-table-wrap" style="height: 600px; overflow: auto;">
                            <div class="progress-table" style="min-width: 350px">
                                <div class="table-head">
                                    {{-- <div class="serial">#</div> --}}
                                    <div class="country" style="width: 45%">Pukul</div>
                                    <div class="visit" style="width: 55%">Program Acara</div>
                                </div>
                                @foreach ($jadwalSenin as $senin)
                                <div class="table-row">
                                    {{-- <div class="serial">01</div> --}}
                                    <div class="country" style="width: 45%">{{ $senin->mulai }} - {{ $senin->selesai }}</div>
                                    <div class="visit" style="width: 55%">{{ $senin->acara }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @elseif ($hari == 'Selasa')
                        <div class="progress-table-wrap" style="height: 600px; overflow: auto;">
                            <div class="progress-table" style="min-width: 350px">
                                <div class="table-head">
                                    {{-- <div class="serial">#</div> --}}
                                    <div class="country" style="width: 45%">Pukul</div>
                                    <div class="visit" style="width: 55%">Program Acara</div>
                                </div>
                                @foreach ($jadwalSelasa as $selasa)
                                <div class="table-row">
                                    {{-- <div class="serial">01</div> --}}
                                    <div class="country" style="width: 45%">{{ $selasa->mulai }} - {{ $selasa->selesai }}</div>
                                    <div class="visit" style="width: 55%">{{ $selasa->acara }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @elseif ($hari == 'Rabu')
                        <div class="progress-table-wrap" style="height: 600px; overflow: auto;">
                            <div class="progress-table" style="min-width: 350px">
                                <div class="table-head">
                                    {{-- <div class="serial">#</div> --}}
                                    <div class="country" style="width: 45%">Jam</div>
                                    <div class="visit" style="width: 55%">Program Acara</div>
                                </div>
                                @foreach ($jadwalRabu as $rabu)
                                <div class="table-row">
                                    {{-- <div class="serial">01</div> --}}
                                    <div class="country" style="width: 45%">{{ $rabu->mulai }} - {{ $rabu->selesai }}</div>
                                    <div class="visit" style="width: 55%">{{ $rabu->acara }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @elseif ($hari == 'Kamis')
                        <div class="progress-table-wrap" style="height: 600px; overflow: auto;">
                            <div class="progress-table" style="min-width: 350px">
                                <div class="table-head">
                                    {{-- <div class="serial">#</div> --}}
                                    <div class="country" style="width: 45%">Pukul</div>
                                    <div class="visit" style="width: 55%">Program Acara</div>
                                </div>
                                @foreach ($jadwalKamis as $kamis)
                                <div class="table-row">
                                    {{-- <div class="serial">01</div> --}}
                                    <div class="country" style="width: 45%">{{ $kamis->mulai }} - {{ $kamis->selesai }}</div>
                                    <div class="visit" style="width: 55%">{{ $kamis->acara }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @elseif ($hari == 'Jumat')
                        <div class="progress-table-wrap" style="height: 600px; overflow: auto;">
                            <div class="progress-table" style="min-width: 350px">
                                <div class="table-head">
                                    {{-- <div class="serial">#</div> --}}
                                    <div class="country" style="width: 45%">Pukul</div>
                                    <div class="visit" style="width: 55%">Program Acara</div>
                                </div>
                                @foreach ($jadwalJumat as $jumat)
                                <div class="table-row">
                                    {{-- <div class="serial">01</div> --}}
                                    <div class="country" style="width: 45%">{{ $jumat->mulai }} - {{ $jumat->selesai }}</div>
                                    <div class="visit" style="width: 55%">{{ $jumat->acara }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @elseif ($hari == 'Sabtu')
                        <div class="progress-table-wrap" style="height: 600px; overflow: auto;">
                            <div class="progress-table" style="min-width: 350px">
                                <div class="table-head">
                                    {{-- <div class="serial">#</div> --}}
                                    <div class="country" style="width: 45%">Pukul</div>
                                    <div class="visit" style="width: 55%">Program Acara</div>
                                </div>
                                @foreach ($jadwalSabtu as $sabtu)
                                <div class="table-row">
                                    {{-- <div class="serial">01</div> --}}
                                    <div class="country" style="width: 45%">{{ $sabtu->mulai }} - {{ $sabtu->selesai }}</div>
                                    <div class="visit" style="width: 55%">{{ $sabtu->acara }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @elseif ($hari == 'Minggu')
                        <div class="progress-table-wrap" style="height: 600px; overflow: auto;">
                            <div class="progress-table" style="min-width: 350px">
                                <div class="table-head">
                                    {{-- <div class="serial">#</div> --}}
                                    <div class="country" style="width: 45%">Pukul</div>
                                    <div class="visit" style="width: 55%">Program Acara</div>
                                </div>
                                @foreach ($jadwalMinggu as $minggu)
                                <div class="table-row">
                                    {{-- <div class="serial">01</div> --}}
                                    <div class="country" style="width: 45%">{{ $minggu->mulai }} - {{ $minggu->selesai }}</div>
                                    <div class="visit" style="width: 55%">{{ $minggu->acara }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                    {{-- @endforeach --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
<!--   Weekly-News start -->
<div class="weekly-news-area pt-50">
    <div class="container">
        <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Film Pendek Terbaru</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">
                        @foreach ($filmPendek as $film)
                        <div class="weekly-single">
                            <div class="weekly-img" style="border: 1px solid #fc3f00; border-radius: 5px">
                                @if ($film->cover != null)
                                <img style="width: 368px; height: 430px" src="{{ URL('../storage/'.$video->thumbnail)}}" alt="">
                                @else
                                <img style="width: 368px; height: 430px" src="{{ $film->thumbnail }}" alt="">
                                @endif
                            </div>
                            <div class="weekly-caption">
                                {{-- <span class="color1">Strike</span> --}}
                                <h4><a href="{{ route('show.video', $film->slug) }}">{{ $film->title }}</a></h4>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="weekly-single">
                            <div class="weekly-img">
                                    <img style="width: 250px; height: 400px" src="{{ URL('/frontend/img/news/weeklyNews3.jpg') }}" alt="">
                            </div>
                            <div class="weekly-caption">
                                <span class="color1">Strike</span>
                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="weekly-single">
                            <div class="weekly-img">
                                <img style="width: 250px; height: 400px" src="{{ URL('/frontend/img/news/weeklyNews1.jpg') }}" alt="">
                            </div>
                            <div class="weekly-caption">
                                <span class="color1">Strike</span>
                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>           
<!-- End Weekly-News -->
<!-- Whats New Start -->
{{-- <section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-8">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-3 col-md-3">
                    <div class="section-tittle mb-30">
                        <h3>Whats New</h3>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="properties__button">
                        <!--Nav Button  -->                                            
                        <nav>                                                                     
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lifestyle</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Travel</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Fashion</a>
                                <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                                <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- card one -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card two -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card three -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card fure -->
                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card Five -->
                        <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card Six -->
                        <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End Nav Card -->
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Section Tittle -->
            <div class="section-tittle mb-40">
                <h3>Follow Us</h3>
            </div>
            <!-- Flow Socail -->
            <div class="single-follow mb-45">
                <div class="single-box">
                    <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                        </div>
                        <div class="follow-count">  
                            <span>8,045</span>
                            <p>Fans</p>
                        </div>
                    </div> 
                    <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                        </div>
                        <div class="follow-count">
                            <span>8,045</span>
                            <p>Fans</p>
                        </div>
                    </div>
                        <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                        </div>
                        <div class="follow-count">
                            <span>8,045</span>
                            <p>Fans</p>
                        </div>
                    </div>
                    <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                        </div>
                        <div class="follow-count">
                            <span>8,045</span>
                            <p>Fans</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New Poster -->
            <div class="news-poster d-none d-lg-block">
                <img src="assets/img/news/news_card.jpg" alt="">
            </div>
        </div>
        </div>
    </div>
</section> --}}
<!-- Whats New End -->
<!--   Weekly2-News start -->
<div class="weekly2-news-area  weekly2-pading gray-bg">
    <div class="container">
        <div class="weekly2-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Dari Kementerian Komunikasi dan Informatika</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly2-news-active dot-style d-flex dot-style">
                        @foreach ($videoKominfo as $kominfo)
                        <div class="weekly2-single">
                            <div class="weekly2-img">
                                @if ($kominfo->cover != null)
                                <img style="height: 180px" src="{{ URL('../storage/'.$kominfo->thumbnail)}}" alt="">    
                                @else
                                <img style="height: 180px" src="{{ $kominfo->thumbnail }}" alt="">
                                @endif
                            </div>
                            <div class="weekly2-caption">
                                <span class="color1"><a style="color: black" href="{{ route('show.category', $kominfo->category->slug) }}">{{ $kominfo->category->name }}</a></span>
                                <p>{{ Carbon\Carbon::parse($kominfo->created_at)->translatedFormat("d M Y") }}</p>
                                <h4><a href="{{ route('show.video', $kominfo->slug) }}">{{ $kominfo->title }}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>           
<!-- End Weekly-News -->
<!-- Start Youtube -->
<div class="youtube-area video-padding">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Drama terbaru</h3>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="video-items-active">
                    @foreach ($videoDrama as $drama)
                    <div class="video-items text-center">
                        <iframe src="{{ $drama->link_file }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="video-info">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-caption">
                        @foreach ($dramaCaption as $drama)
                        <div class="top-caption">
                            <span class="color1">{{ $drama->category->name }}</span>
                        </div>
                        <div class="bottom-caption">
                            <h2>{{ $drama->title }}</h2>
                            <p>{!! $drama->body !!}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testmonial-nav text-center">
                        @foreach ($videoDrama as $drama)
                        <div class="single-video">
                            <iframe  src="{{ $drama->link_youtube }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="video-intro">
                                <h4>{{ $drama->title }}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- End Start youtube -->
<!--  Recent Articles start -->
<div class="recent-articles">
    <div class="container">
        <div class="recent-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Berita Terbaru</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        @foreach ($videoBerita as $berita)
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                @if ($berita->cover != null)
                                <img src="{{ URL('../storage/'.$berita->thumbnail)}}" alt="">
                                @else
                                <img src="{{ $berita->thumbnail }}" alt="">
                                @endif
                            </div>
                            <div class="what-cap">
                                <span class="color3">{{ $berita->category->name }}</span>
                                <h4><a href="{{ route('show.video', $berita->slug) }}">{{ $berita->title }}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>           
<!--Recent Articles End -->
@endsection