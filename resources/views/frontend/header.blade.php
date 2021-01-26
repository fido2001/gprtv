<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="index.html"><img src="https://www.gprtv.id/frontend/./asset/img/gpr-logo.png" alt="" style="width: 150px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 header-flex">
                            <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="https://www.gprtv.id/frontend/./asset/img/gpr-logo.png" alt="" style="width: 150px; margin-top:17px"></a>
                                </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>                  
                                    <ul id="navigation">    
                                        <li><a href="{{ URL('/') }}">Beranda</a></li>
                                        <li><a href="{{ route('all.video') }}">Video</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('all.video') }}">Semua Video</a>
                                                @foreach ($dataKategori as $kategori)
                                                <li><a href="{{ route('show.category', $kategori->slug) }}">{{ $kategori->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('aboutus') }}">Tentang Kami</a></li>
                                        <li><a href="latest_news.html">Jadwal Acara</a></li>
                                        <li><a href="{{ route('live') }}">Live Streaming</a></li>
                                        @guest
                                        <li class="f-right"><a href="{{ route('login') }}">Masuk</a></li>
                                        @else
                                        <li class="f-right"><a href="#">Hi, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
                                            <ul class="submenu">
                                                @if (Auth::user()->level == 'admin')
                                                <li><a href="{{ route('admin.index') }}">Admin Dashboard</a></li>
                                                @endif
                                                <li><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        @endguest
                                        <li class="header-right-btn f-right d-none d-lg-block" style="margin-top: 35px">
                                            <i class="fas fa-search special-tag"></i>
                                            <div class="search-box">
                                                <form action="{{ route('search.video') }}" method="GET">
                                                    <input name="q" type="text" placeholder="Cari">
                                                    {{-- <button type="submit" class="btn btn-outline-info">Cari</button> --}}
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>