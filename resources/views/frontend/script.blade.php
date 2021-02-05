        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- All JS Custom Plugins Link Here here -->
        <script src="{{ URL('/frontend') }}/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ URL('/frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ URL('/frontend') }}/js/popper.min.js"></script>
        <script src="{{ URL('/frontend') }}/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ URL('/frontend') }}/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ URL('/frontend') }}/js/owl.carousel.min.js"></script>
        <script src="{{ URL('/frontend') }}/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="{{ URL('/frontend') }}/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ URL('/frontend') }}/js/wow.min.js"></script>
		<script src="{{ URL('/frontend') }}/js/animated.headline.js"></script>
        <script src="{{ URL('/frontend') }}/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="{{ URL('/frontend') }}/js/jquery.ticker.js"></script>
        <script src="{{ URL('/frontend') }}/js/site.js"></script>


		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ URL('/frontend') }}/js/jquery.scrollUp.min.js"></script>
        <script src="{{ URL('/frontend') }}/js/jquery.nice-select.min.js"></script>
		<script src="{{ URL('/frontend') }}/js/jquery.sticky.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ URL('/frontend') }}/js/plugins.js"></script>
        <script src="{{ URL('/frontend') }}/js/main.js"></script>
        
        <script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>

        <script>
            new Clappr.Player({
            source: "https://h1.intechmedia.net/intech/ch66.m3u8",
            poster: 'https://www.gprtv.id/frontend/img/logo-gpr.png',
            mimeType: "application/x-mpegURL",
            mute: false,
            autoPlay: false,
            parent: '#player-container',
            width: '100%',
            height: '100%'
            });

            // $( document ).ready(function() {
            //     $('.days').hide();
            //     $('#list-senin').show();
            // });

            $('li').click(function(){    
                if(this.id == 'hari-senin'){
                    $('#hari-senin').removeClass("genric-btn info-border radius").addClass("genric-btn info radius");
                    $('#hari-selasa').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-rabu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-kamis').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-jumat').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-sabtu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-minggu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#list-senin').show();
                    $('#list-selasa').hide();
                    $('#list-rabu').hide();
                    $('#list-kamis').hide();
                    $('#list-jumat').hide();
                    $('#list-sabtu').hide();
                    $('#list-minggu').hide();
                }else if(this.id == 'hari-selasa'){
                    $('#hari-senin').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-selasa').removeClass("genric-btn info-border radius").addClass("genric-btn info radius");
                    $('#hari-rabu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-kamis').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-jumat').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-sabtu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-minggu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#list-senin').hide();
                    $('#list-selasa').show();
                    $('#list-rabu').hide();
                    $('#list-kamis').hide();
                    $('#list-jumat').hide();
                    $('#list-sabtu').hide();
                    $('#list-minggu').hide();
                }else if(this.id == 'hari-rabu'){
                    $('#hari-senin').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-selasa').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-rabu').removeClass("genric-btn info-border radius").addClass("genric-btn info radius");
                    $('#hari-kamis').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-jumat').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-sabtu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-minggu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#list-senin').hide();
                    $('#list-selasa').hide();
                    $('#list-rabu').show();
                    $('#list-kamis').hide();
                    $('#list-jumat').hide();
                    $('#list-sabtu').hide();
                    $('#list-minggu').hide();
                }else if(this.id == 'hari-kamis'){
                    $('#hari-senin').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-selasa').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-rabu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-kamis').removeClass("genric-btn info-border radius").addClass("genric-btn info radius");
                    $('#hari-jumat').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-sabtu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-minggu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#list-senin').hide();
                    $('#list-selasa').hide();
                    $('#list-rabu').hide();
                    $('#list-kamis').show();
                    $('#list-jumat').hide();
                    $('#list-sabtu').hide();
                    $('#list-minggu').hide();
                }else if(this.id == 'hari-jumat'){
                    $('#hari-senin').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-selasa').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-rabu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-kamis').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-jumat').removeClass("genric-btn info-border radius").addClass("genric-btn info radius");
                    $('#hari-sabtu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-minggu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#list-senin').hide();
                    $('#list-selasa').hide();
                    $('#list-rabu').hide();
                    $('#list-kamis').hide();
                    $('#list-jumat').show();
                    $('#list-sabtu').hide();
                    $('#list-minggu').hide();
                }else if(this.id == 'hari-sabtu'){
                    $('#hari-senin').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-selasa').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-rabu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-kamis').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-jumat').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-sabtu').removeClass("genric-btn info-border radius").addClass("genric-btn info radius");
                    $('#hari-minggu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#list-senin').hide();
                    $('#list-selasa').hide();
                    $('#list-rabu').hide();
                    $('#list-kamis').hide();
                    $('#list-jumat').hide();
                    $('#list-sabtu').show();
                    $('#list-minggu').hide();
                }else if(this.id == 'hari-minggu'){
                    $('#hari-senin').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-selasa').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-rabu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-kamis').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-jumat').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-sabtu').removeClass("genric-btn info radius").addClass("genric-btn info-border radius");
                    $('#hari-minggu').removeClass("genric-btn info-border radius").addClass("genric-btn info radius");
                    $('#list-senin').hide();
                    $('#list-selasa').hide();
                    $('#list-rabu').hide();
                    $('#list-kamis').hide();
                    $('#list-jumat').hide();
                    $('#list-sabtu').hide();
                    $('#list-minggu').show();
                }
            });

            $(function() {
                $('#days-selector').change(function(){
                    $('.days').hide();
                    $('#' + $(this).val()).show();
                });
            });
        </script>