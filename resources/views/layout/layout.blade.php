{{-- https://demo.templatemonster.com/demo/371725.html?_gl=1*ccdlzq*_gcl_au*MTEwMTAzOTQ2OC4xNzM2ODUzNjYz*_ga*MzgwODYyMjcyLjE3MzY4NTM2NTk.*_ga_FTPYEGT5LY*MTczNjg1MzY1OS4xLjEuMTczNjg1MzY3MC40OS4wLjA. --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Striker HTML5 Template">

    <title>Vivid Entertainment Streaming And Blog</title>

    <!-- Favicon -->
    <!-- All CSS files -->
    {{-- <link rel="stylesheet" href="{{ asset ('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/vendor/aksVideoPlayer.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset ('assets/css/app.css') }}"> --}}
    <link rel="stylesheet" href="https://uiparadox.co.uk/templates/vivid/v3/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="https://uiparadox.co.uk/templates/vivid/v3/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="https://uiparadox.co.uk/templates/vivid/v3/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="https://uiparadox.co.uk/templates/vivid/v3/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="https://uiparadox.co.uk/templates/vivid/v3/assets/css/vendor/aksVideoPlayer.css">
    <link rel="stylesheet" href="https://uiparadox.co.uk/templates/vivid/v3/assets/css/app.css">
</head>

<body>
    <!-- Preloader-->
    <div id="preloader" class="loader">
        <div class="loader__container">
            <div class="loader__film">
                <img class="loader__film-img" src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/preloader/film.png" alt="">
                <img class="loader__film-img" src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/preloader/film.png" alt="">
            </div>
            <img class="loader__camera" src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/preloader/camera.png" alt="">
        </div>
    </div>
    <!-- Back To Top Start -->
    <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fas fa-angle-up"></i></a>
    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="main-wrapper overflow-hidden">

        @include('layout.atribut.nav')

        @yield('content')

        @include('layout.atribut.footer')

        <!-- modal-popup area start  -->
        <div class="modal fade" id="videoModal" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="top_bar">
                        <h4 class="modal-title">Demon Slayer Season 4</h4>
                        <button type="button" class="close" id="closeVideoModalButton" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i> <b>Close</b></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <video controls title="Video">
                            <source src="assets/media/video/movie-video.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal-popup area end  -->

    </div>

    <!-- Jquery Js -->
    <script src="https://uiparadox.co.uk/templates/vivid/v3/assets/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="https://uiparadox.co.uk/templates/vivid/v3/assets/js/vendor/bootstrap.min.js"></script>
    <script src="https://uiparadox.co.uk/templates/vivid/v3/assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="https://uiparadox.co.uk/templates/vivid/v3/assets/js/vendor/slick.min.js"></script>
    <script src="https://uiparadox.co.uk/templates/vivid/v3/assets/js/vendor/jquery-appear.js"></script>
    <script src="https://uiparadox.co.uk/templates/vivid/v3/assets/js/vendor/jquery-validator.js"></script>
    <script src="https://uiparadox.co.uk/templates/vivid/v3/assets/js/vendor/aksVideoPlayer.js"></script>

    <!-- Site Scripts -->
    <script src="https://uiparadox.co.uk/templates/vivid/v3/assets/js/app.js"></script>
</body>

</html>
