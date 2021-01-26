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
        
        {{-- <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
        <script src="https://vjs.zencdn.net/7.2.3/video.js"></script>

        <script>
        var player = videojs('hls-example');
        player.play();
        </script> --}}

        <script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>

        <script>
        player = new Clappr.Player({
        source: "https://h1.intechmedia.net/intech/ch66.m3u8",
        mimeType: "application/x-mpegURL",
        autoPlay: true, 
        height: "400px",
        width: "800px",
        plugins: {"core": [LevelSelector]}, 
        parentId: "#vid"});
        </script>

        {{-- <script src="https://unpkg.com/video.js/dist/video.js"></script>
        <!--This is for HLS compatibility with all major browsers-->
        <script src = "https://unpkg.com/browse/@videojs/http-streaming@1.13.3/dist/videojs-http-streaming.min.js"></script>
        <script>
            var player = videojs('my_video_1');
        </script> --}}