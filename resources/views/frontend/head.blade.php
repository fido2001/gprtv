<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GPR TV | Kementerian Komunikasi dan Informatika</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/png" href="{{ URL('/frontend') }}/img/logo-gpr.png">

    <!-- CSS here -->
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/ticker-style.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/flaticon.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/slicknav.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/animate.min.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/themify-icons.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/slick.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/nice-select.css">
        <link rel="stylesheet" href="{{ URL('/frontend') }}/css/style.css">

        <style>
            .video {
                padding: 0;
                margin: 0;
                list-style: none;
                display: flex;
                justify-content: center;
            }
            /* #list-selasa, #list-rabu, #list-kamis, #list-jumat, #list-sabtu, #list-minggu {
                display: none;
            } */
            @media only screen and (max-width: 1024px) {
                .mobile-ver {
                    display: block;
                }
                .desktop {
                    display: none;
                }
            }
            @media only screen and (min-width: 1024px) {
                .mobile-ver {
                    display: none;
                }
                .desktop {
                    display: block;
                }
            }

            .gradient-text {
                /* Fallback: Set a background color. */
                background-color: #CA4246;
                
                /* Create the gradient. */
                background-image: linear-gradient(
                        45deg,
                        #CA4246 16.666%, 
                        #E16541 16.666%, 
                        #E16541 33.333%, 
                        #F18F43 33.333%, 
                        #F18F43 50%,
                        #476098 66.666%, 
                        #476098 83.333%, 
                        #A7489B 83.333%);
                
                /* Set the background size and repeat properties. */
                background-size: 100%;
                background-repeat: repeat;

                /* Use the text as a mask for the background. */
                /* This will show the gradient as a text color rather than element bg. */
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent; 
                
                /* Animate the text when loading the element. */
                    /* This animates it on page load and when hovering out. */
                    animation: rainbow-text-simple-animation-rev 0.75s ease forwards;
            }
        </style>
</head>