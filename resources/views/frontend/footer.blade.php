<footer class="mt-40">
    <!-- Footer Start-->
    <div class="footer-area fix" style="padding-top: 30px;">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                    <div class="single-footer-caption">
                        <div class="single-footer-caption">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="{{ URL('/') }}"><img src="{{ URL('/frontend') }}/img/logo-gpr.png" style="width: 200px" class="rounded" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p align="justify">GPRTV.id adalah Government Public Relations Televisi yang dikelola untuk menjalankan amanat Instruksi Presiden Nomor 9 tahun 2015 tentang Pengelolaan Komunikasi Publik.
                                    <br><br>Saksikan GPR TV melalui kanal:<br>
                                    - C Band Telkom 4 Frekuensi 3766 SB 21818 Pol H.<br>

                                    - Ku Band Ses-9 Frekuensi 11861 SB 45000 Pol H.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                    <div class="single-footer-caption">
                        <div class="footer-tittle">
                            <h4>Video</h4>
                            @foreach ($dataKategori as $kategori)
                            <ul>
                                <li><a href="{{ route('show.category', $kategori->slug) }}">{{ $kategori->name }}</a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Tautan</h4>
                            <ul>
                                <li><a href="https://kominfo.go.id/">Kementerian Kominfo RI</a></li>
                                <li><a href="http://indonesiabaik.id/">Indonesia Baik</a></li>
                                <li><a href="http://infopublik.id/">Info Publik</a></li>
                                <li><a href="https://www.indonesia.go.id/">Indonesia.go.id</a></li>
                                <li><a href="https://www.fmb9.go.id/">Forum Merdeka Barat 9</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                    <div class="single-footer-caption mt-60">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <p>Heaven fruitful doesn't over les idays appear creeping</p>
                            <!-- Form -->
                            <div class="footer-form" >
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                    method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                        class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = ' Email Address '">
                                        <div class="form-icon">
                                        <button type="submit" name="submit" id="newsletter-submit"
                                        class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-lg-12">
                    <div class="footer-social">
                        <a href="https://wa.me/62818180380"><i class="fab fa-whatsapp" style="font-size: 30px"></i></a>
                        <a href="mailto:gprtv@mail.kominfo.go.id"><i class="far fa-envelope" style="font-size: 30px"></i></a>
                        <div class="footer-copy-right f-right">
                            <p style="color: #afafaf">Hak Cipta &copy; <script>document.write(new Date().getFullYear());</script> GPR TV</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    {{-- <div class="footer-bottom-area desktop">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <ul class="list-inline">
                        <li class="list-inline-item" style="margin-right: 55px">
                            <a href=""><img src="{{ URL('/frontend') }}/img/fmb9.png" alt="" width="75px"></a>
                        </li>
                        <li class="list-inline-item" style="margin-right: 55px">
                            <a href=""><img src="{{ URL('/frontend') }}/img/indogoid.png" alt="" width="75px"></a>
                        </li>
                        <li class="list-inline-item" style="margin-right: 55px">
                            <a href=""><img src="{{ URL('/frontend') }}/img/info.png" alt="" width="75px"></a>
                        </li>
                        <li class="list-inline-item" style="margin-right: 55px">
                            <a href=""><img src="{{ URL('/frontend') }}/img/indobaik.jpg" alt="" width="75px"></a>
                        </li>
                        <li class="list-inline-item" style="margin-right: 55px">
                            <a href=""><img src="{{ URL('/frontend') }}/img/logo-gpr.png" alt="" width="75px"></a>
                        </li>
                        <li class="list-inline-item">
                            <a href=""><img src="{{ URL('/frontend') }}/img/kominfo.png" alt="" width="50px"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div> --}}
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <ul class="list-inline" style="margin: 2px auto; display:flex; flex-wrap: wrap; justify-content:center">
                    <li class="list-inline-item" style="margin: 10px 25px">
                        <a href="https://fmb9.go.id/" title="Forum Merdeka Barat 9"><img src="{{ URL('/frontend') }}/img/fmb9.png" alt="" width="75px"></a>
                    </li>
                    <li class="list-inline-item" style="margin: 10px 25px">
                        <a href="https://indonesia.go.id/" title="Indonesia.go.id"><img src="{{ URL('/frontend') }}/img/indogoid.png" alt="" width="100px"></a>
                    </li>
                    <li class="list-inline-item" style="margin: 10px 25px">
                        <a href="http://infopublik.id/" title="Infopublik.id"><img src="{{ URL('/frontend') }}/img/info.png" alt="" width="100px"></a>
                    </li>
                    <li class="list-inline-item" style="margin: 10px 25px">
                        <a href="http://indonesiabaik.id/" title="Indonesiabaik.id"><img src="{{ URL('/frontend') }}/img/indobaik.jpg" alt="" width="75px"></a>
                    </li>
                    <li class="list-inline-item" style="margin: 10px 25px">
                        <a href="https://www.gprtv.id/#live" title="GPR TV"><img src="{{ URL('/frontend') }}/img/logo-gpr.png" alt="" width="75px"></a>
                    </li>
                    <li class="list-inline-item" style="margin: 5px 25px">
                        <a href="https://www.kominfo.go.id/" title="Kementerian Komunikasi dan Informatika RI"><img src="{{ URL('/frontend') }}/img/kominfo.png" alt="" width="50px"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- Footer End-->
</footer>