<!DOCTYPE html>
<!--
    Name: Godlike - Gaming HTML Template
    Version: 2.3.4
    Author: nK
    Website: https://nkdev.info/
    Purchase: https://themeforest.net/item/godlike-the-game-template/17166433?ref=_nK
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2018.
-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="_nK">
    <title>GODLIKE | Game Promo</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700%7cMarcellus+SC"
          rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="assets/vendor/revolution/css/settings.css">
    <link rel="stylesheet" href="assets/vendor/revolution/css/layers.css">
    <link rel="stylesheet" href="assets/vendor/revolution/css/navigation.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" href="assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- DateTimePicker -->
    <link rel="stylesheet" href="assets/vendor/jquery-datetimepicker/build/jquery.datetimepicker.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" href="assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GODLIKE -->
    <link rel="stylesheet" href="assets/css/godlike.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>


</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
<!-- START: Page Preloader -->
<?php include 'header.php'; ?><div class="nk-preloader">
    <!--
         Preloader animation
         data-close-... data used for closing preloader
         data-open-...  data used for opening preloader
    -->
    <div class="nk-preloader-bg"
         style="background-color: #000;"
         data-close-frames="23"
         data-close-speed="1.2"
         data-close-sprites="./assets/images/preloader-bg.png"
         data-open-frames="23"
         data-open-speed="1.2"
         data-open-sprites="./assets/images/preloader-bg-bw.png">
    </div>

    <div class="nk-preloader-content">
        <div>
            <img class="nk-img" src="assets/images/logo.svg" alt="GodLike - Gaming Bootstrap 4 Template" width="170">
            <div class="nk-preloader-animation"></div>
        </div>
    </div>

    <div class="nk-preloader-skip">Skip</div>
</div>
<!-- END: Page Preloader -->


<!--
START: Page Video Background

Additional Attributes:
data-video - Youtube/Vimeo/self-hosted video urls.
    self-hosted video example:
    data-video="mp4:./video/local-video.mp4,webm:./video/local-video.webm,ogv:./video/local-video.ogv"
data-video-loop - loop video (true/false)
data-video-mute - mute video music (true/false)
data-video-volume - volume of video music (0-100)
data-video-start-time - video start time in seconds
data-video-end-time - video end time in seconds
data-video-pause-on-page-leave - pause video when the page not in focus (true/false)
-->
<div class="nk-page-background op-2" data-video="" data-video-loop="true" data-video-mute="true" data-video-volume="0"
     data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true"
     style="background-image: url('assets/images/image-1.jpg');"></div>
<!-- END: Page Background -->

<!--
    START: Page Audio Background

    Additional Attributes:
        data-audio - URL to audio file
        data-audio-volume - audio volume (0-100)
        data-audio-autoplay - autoplay audio (true/false)
        data-audio-loop - loop audio (true/false)
        data-audio-pause-on-page-leave - pause video when the page not in focus (true/false)
-->
<div class="nk-page-background-audio d-none" data-audio="" data-audio-volume="100" data-audio-autoplay="true"
     data-audio-loop="true" data-audio-pause-on-page-leave="true"></div>
<!-- END: Page Background -->


<!-- START: Page Border -->
<div class="nk-page-border">
    <div class="nk-page-border-t"></div>
    <div class="nk-page-border-r"></div>
    <div class="nk-page-border-b"></div>
    <div class="nk-page-border-l"></div>
</div>
<!-- END: Page Border -->


<!--
    START: Navbar

    Additional Classes:
        .nk-navbar-lg
        .nk-navbar-align-center
        .nk-navbar-align-right
        .nk-navbar-overlay-content
        .nk-navbar-light
        .nk-navbar-no-link-effect
-->
<nav class="nk-navbar nk-navbar-side nk-navbar-left nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content"
     id="nk-navbar-left">
    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">
                <div class="nk-nav-row">

                    <a href="index.php" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="130">
                    </a>

                    <ul class="nk-nav-icons">

                        <li>
                            <a href="#" class="nk-search-toggle no-link-effect">
                                <span class="nk-icon-search"></span>
                            </a>
                        </li>


                        <li>
                            <a href="#" class="nk-cart-toggle no-link-effect">
                                <span class="nk-icon-toggle">
                                    <span class="nk-icon-toggle-front">
                                        <span class="ion-android-cart"></span>
                                        <span class="nk-badge">8</span>
                                    </span>
                                    <span class="nk-icon-toggle-back">
                                        <span class="nk-icon-close"></span>
                                    </span>
                                </span>
                            </a>
                        </li>


                        <li>
                            <a href="#" class="nk-sign-toggle no-link-effect">
                                <span class="nk-icon-toggle">
                                    <span class="nk-icon-toggle-front">
                                        <span class="fa fa-sign-in"></span>
                                    </span>
                                    <span class="nk-icon-toggle-back">
                                        <span class="nk-icon-close"></span>
                                    </span>
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!--
                    START: Navigation

                    Additional Classes:
                        .nk-nav-row-top
                        .nk-nav-row-center
                        .nk-nav-row-bottom
                -->
                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                    <ul class="nk-nav" data-nav-mobile="#nk-nav-mobile">
                        <li class="active nk-drop-item">
                            <a href="index.php">
                                Home</a>
                            <ul class="dropdown">
                                <li class=" ">
                                    <a href="index.php">
                                        Landing</a>
                                </li>
                                <li class=" ">
                                    <a href="index-main.php">
                                        Main</a>
                                </li>
                                <li class="active ">
                                    <a href="index-game-promo.php">
                                        Game Promo</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#info">
                                Information</a>
                        </li>
                        <li class=" ">
                            <a href="#testimonials">
                                Testimonials</a>
                        </li>
                        <li class=" ">
                            <a href="#partners">
                                Partners</a>
                        </li>
                    </ul>
                </div>
                <!--
                    END: Navigation
                -->
                <div class="nk-nav-row">
                    <div class="nk-nav-footer">
                        &copy; 2018 nK Group Inc. Developed in association with LoremInc. IpsumCompany, SitAmmetGroup,
                        CumSit and related logos are registered trademarks. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END: Navbar -->


<!-- START: Navigation Toggler -->
<ul class="nk-nav-toggler-right">


</ul>

<ul class="nk-nav-toggler-left">
    <li class="d-lg-none">
        <span class="nk-btn nk-btn-lg nk-btn-icon" data-nav-toggle="#nk-nav-mobile">
            <span class="icon">
                <span class="nk-icon-burger">
                    <span class="nk-t-1"></span>
                    <span class="nk-t-2"></span>
                    <span class="nk-t-3"></span>
                </span>
            </span>
        </span>
    </li>
</ul>

<!-- END: Navigation Toggler -->


<!--
START: Navbar Mobile

Additional Classes:
.nk-navbar-left-side
.nk-navbar-right-side
.nk-navbar-lg
.nk-navbar-overlay-content
.nk-navbar-light
.nk-navbar-no-link-effect
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.php" class="nk-nav-logo">
                <img src="assets/images/logo.svg" alt="" width="90">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->


<div class="nk-main">


    <!-- START: Header Title -->
    <!--
        Additional Classes:
            .nk-header-title-sm
            .nk-header-title-md
            .nk-header-title-lg
            .nk-header-title-xl
            .nk-header-title-full
            .nk-header-title-parallax
            .nk-header-title-parallax-opacity
            .nk-header-title-boxed
    -->
    <div class="nk-header-title nk-header-title-full nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image op-4">
            <img src="assets/images/video-6-thumb.jpg" alt="" class="jarallax-img">
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">


                    <div class="nk-header-text">

                        <div class="nk-gap-2"></div>

                        <h1 class="nk-title display-4">Dark Souls III</h1>

                        <div class="nk-gap-2"></div>

                        <a href="#" class="nk-btn nk-btn-lg">
                            <span class="icon ion-playstation"></span>
                            <span>PS4</span>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="nk-btn nk-btn-lg">
                            <span class="icon ion-xbox"></span>
                            <span>Xbox 1</span>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="nk-btn nk-btn-lg">
                            <span class="icon ion-steam"></span>
                            <span>PC</span>
                        </a>

                        <div class="nk-gap-2"></div>

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=Wb2qjfpOeMo"
                                     data-video-thumb="assets/images/video-6-thumb.jpg"></div>
                            </div>
                        </div>

                        <div class="nk-gap-4"></div>

                    </div>


                </div>
            </div>
        </div>

    </div>
    <!-- END: Header Title -->


    <!-- START: CTA -->
    <div class="nk-box text-center text-white bg-dark-1">
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-md-left">
                    <h2 class="nk-title">Purchase now and save <strong>$25</strong></h2>
                    <h3 class="nk-sub-title mb-0 text-white op-7">Limited time offer!</h3>
                </div>
                <div class="col-md-4 text-md-right">
                    <div class="nk-gap-2 d-md-none"></div>
                    <a href="#!" class="nk-btn nk-btn-lg">
                        <span>Buy Now</span>
                        <span class="icon"><i class="ion-bag"></i></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: CTA -->

    <!-- START: Features -->
    <div class="container">

        <div class="nk-gap-4"></div>
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="nk-box-3 bg-dark-1">
                            <div class="nk-ibox">
                                <div class="nk-ibox-icon nk-ibox-icon-circle">
                                    <span class="ion-ios-game-controller-b"></span>
                                </div>
                                <div class="nk-ibox-cont">
                                    <h2 class="nk-ibox-title">Incredible Atmosphere</h2>
                                    Second Made make spirit green divide lesser creeping void and night replenish cattle
                                    don't was female first their day open.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nk-box-3 bg-dark-2">
                            <div class="nk-ibox">
                                <div class="nk-ibox-icon nk-ibox-icon-circle">
                                    <span class="ion-fireball"></span>
                                </div>
                                <div class="nk-ibox-cont">
                                    <h2 class="nk-ibox-title">Catchy Battles</h2>
                                    Image their gathered. Every. Called together signs winged, unto midst sea life air
                                    them. Us sea them shall you saw.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nk-box-3 bg-dark-2">
                            <div class="nk-ibox">
                                <div class="nk-ibox-icon nk-ibox-icon-circle">
                                    <span class="ion-ribbon-a"></span>
                                </div>
                                <div class="nk-ibox-cont">
                                    <h2 class="nk-ibox-title">28 Awards</h2>
                                    Moveth fruitful it appear wherein man don't firmament set blessed. Beast seas god
                                    itself. Made night image male. Own night.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nk-box-3 bg-dark-1">
                            <div class="nk-ibox">
                                <div class="nk-ibox-icon nk-ibox-icon-circle">
                                    <span class="ion-ios-infinite-outline"></span>
                                </div>
                                <div class="nk-ibox-cont">
                                    <h3 class="nk-ibox-title">Unlimited Possibilities</h3>
                                    Commodo scelerisque rutrum consectetuer ad ad molestie aenean iaculis ad senectus
                                    in. Vel felis tellus orci dolor elit turpis condimentum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Features -->


    <!-- START: Tabs -->
    <div class="nk-box bg-dark-1" id="info">
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2">

                    <div class="nk-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tabs-1-1" role="tab"
                                   data-toggle="tab">Technologies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab">Achievements</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab">Promo</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
                                <div class="nk-gap-3"></div>

                                <div class="nk-progress nk-progress-sm nk-count" data-progress="91"
                                     data-progress-mask="{$}%">
                                    <div class="nk-progress-title">PhyreEngine</div>
                                    <div class="nk-progress-line">
                                        <div style="width: 91%;">
                                            <div class="nk-progress-percent">91%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-progress nk-progress-sm nk-count" data-progress="22"
                                     data-progress-mask="{$}%">
                                    <div class="nk-progress-title">PHP</div>
                                    <div class="nk-progress-line">
                                        <div style="width: 22%;">
                                            <div class="nk-progress-percent">22%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-progress nk-progress-sm nk-count" data-progress="66"
                                     data-progress-mask="{$}%">
                                    <div class="nk-progress-title">Photoshop</div>
                                    <div class="nk-progress-line">
                                        <div style="width: 66%;">
                                            <div class="nk-progress-percent">66%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-progress nk-progress-sm nk-count" data-progress="43"
                                     data-progress-mask="{$}%">
                                    <div class="nk-progress-title">Paint</div>
                                    <div class="nk-progress-line">
                                        <div style="width: 43%;">
                                            <div class="nk-progress-percent">43%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                                <div class="nk-gap-3"></div>
                                <div class="row vertical-gap">
                                    <div class="col-md-4">
                                        <div class="nk-counter-2">
                                            <div class="nk-count">21</div>
                                            <h3 class="nk-counter-title h4">Months</h3>
                                            <div class="nk-gap"></div>
                                            <p>
                                                You'll set fifth. Grass replenish man male light may fly waters tree
                                                evening them hath They're to meat moving also.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="nk-counter-2">
                                            <div class="nk-count">2</div>
                                            <h3 class="nk-counter-title h4">DLC</h3>
                                            <div class="nk-gap"></div>
                                            <p>
                                                Appear our likeness own for a deep, firmament great whose fly saw thing
                                                earth saw. Fill divide whales blessed kind.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="nk-counter-2">
                                            <div class="nk-count">37</div>
                                            <h3 class="nk-counter-title h4">Awards Won</h3>
                                            <div class="nk-gap"></div>
                                            <p>
                                                All blessed second creature fly were given moving was itself itself
                                                beginning you're behold creepeth of. Doesn't you two good.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                                <div class="nk-gap-3"></div>
                                <div class="nk-plain-video"
                                     data-video="https://www.youtube.com/watch?v=3XP0nyLz6Y8"></div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>
    <!-- END: Tabs -->


    <!-- START: Testimonials -->
    <div class="nk-box" id="testimonials">
        <div class="nk-gap-4"></div>

        <div class="container">
            <div class="nk-carousel-2 nk-carousel-x1" data-autoplay="12000" data-dots="true">
                <div class="nk-carousel-inner">
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"Man to. For male second male own fish fowl hath form let. Third own
                                                years likeness waters don't their. Fifth in air they're lights give
                                                itself lesser creepeth. Open. Saw is spirit one won't darkness were
                                                moving cattle beast darkness."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Lesa Cruz</div>
                                        <div class="nk-testimonial-source">Frontend Developer, Google</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"To winged for make land rule earth and you so you're. Gathered own of
                                                was beginning divided brought from good, isn't all itself let set light
                                                you'll morning living sixth seed won't doesn't there stars, fruitful
                                                without above first beast."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Kurt Tucker</div>
                                        <div class="nk-testimonial-source">CEO, Envato</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"Hath their. Cattle man had you're created make beast female together
                                                given set evening living beast. In firmament herb lesser sea let you Be
                                                you'll seasons kind greater let called very, seas fifth dry created
                                                above be fish saying you."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Katie Anderson</div>
                                        <div class="nk-testimonial-source">Product Designer, Apple</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"Image unto over together created whose doesn't given beginning in
                                                bearing likeness said made seed together so that dry let night greater
                                                of a. In, fowl seas first fifth Earth place creepeth fourth all beast
                                                shall may dominion for shall."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Luke Fuller</div>
                                        <div class="nk-testimonial-source">Copywriter, Dropbox</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"Them itself saw. Be his. After very. Land. Fifth. Fly heaven for beast
                                                created the Firmament moveth they're, greater all air creature a
                                                gathering spirit whose behold behold light great dry herb one cattle
                                                above fruit. Him unto midst their."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Felicia Meyer</div>
                                        <div class="nk-testimonial-source">Backend Developer, Twitter</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Testimonials -->

    <!-- START: Partners -->
    <div class="nk-box bg-dark-1" id="partners">
        <div class="nk-gap-3"></div>
        <div class="container">
            <div class="nk-carousel-2 nk-carousel-x4 nk-carousel-no-margin nk-carousel-all-visible"
                 data-autoplay="5000">
                <div class="nk-carousel-inner">
                    <div>
                        <div>
                            <a href="#"><img src="assets/images/partner-logo-1-light.png" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="assets/images/partner-logo-2-light.png" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="assets/images/partner-logo-3-light.png" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="assets/images/partner-logo-4-light.png" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="assets/images/partner-logo-5-light.png" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="assets/images/partner-logo-6-light.png" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="assets/images/partner-logo-7-light.png" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Partners -->


    <!-- START: Footer -->
    <!--
        Additional Classes:
            .nk-footer-parallax
            .nk-footer-parallax-opacity
    -->
    <footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
        <img class="nk-footer-top-corner" src="assets/images/footer-corner.png" alt="">


        <div class="container">
            <div class="nk-gap-2"></div>
            <div class="nk-footer-logos">
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img"
                                                                                                  src="assets/images/footer-logo-godlike.png"
                                                                                                  alt=""
                                                                                                  width="120"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img"
                                                                                                  src="assets/images/footer-logo-yp3.png"
                                                                                                  alt=""
                                                                                                  width="120"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img"
                                                                                                  src="assets/images/footer-logo-nk-team.png"
                                                                                                  alt=""
                                                                                                  width="150"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img"
                                                                                                  src="assets/images/footer-logo-pegi-18.png"
                                                                                                  alt="" width="46"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img"
                                                                                                  src="assets/images/footer-logo-18-restricted.png"
                                                                                                  alt=""
                                                                                                  width="160"></a>
            </div>
            <div class="nk-gap"></div>

            <p>
                &copy; 2018 nK Group Inc. Developed in association with LoremInc. IpsumCompany, SitAmmetGroup, CumSit
                and related logos are registered trademarks. GodLike and related logos are registered trademarks or
                trademarks of id Software LLC in the U.S. and/or other countries. All other trademarks or trade names
                are the property of their respective owners. All Rights Reserved.
            </p>
            <p>
                GodLike &reg;: The Darkness&trade; is a fowl beginning there Over had moveth so land wherein, fruit very
                gathering of, female creepeth. Dominion above sea gathered unto whales. Subdue to, have Life fowl
                firmament wherein. Great air without for, great him he That let earth together thing sea fly gathering.
                Air whose. Green in face tree to spirit life. Place stars. It two. Deep seed man isn't third. Own he is
                may had darkness waters you'll forth fifth their don't also fruitful be years in spirit to tree. Sixth
                fourth open female.
            </p>

            <div class="nk-footer-links">
                <a href="#" class="link-effect">Terms of Service</a> <span>|</span> <a href="#" class="link-effect">Privacy
                    Policy</a>
            </div>

            <div class="nk-gap-4"></div>
        </div>
    </footer>
    <!-- END: Footer -->


</div>


<!--
START: Share Buttons
    .nk-share-buttons-left
-->
<div class="nk-share-buttons d-none d-md-flex">
    <ul>
        <li>
            <span class="nk-share-icon" title="Share page on Facebook" data-share="facebook">
                <span class="icon fa fa-facebook"></span>
            </span>
            <span class="nk-share-name">Facebook</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on Twitter" data-share="twitter">
                <span class="icon fa fa-twitter"></span>
            </span>
            <span class="nk-share-name">Twitter</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on Google+" data-share="google-plus">
                <span class="icon fa fa-google-plus"></span>
            </span>
            <span class="nk-share-name">Google Plus</span>
        </li>
        <!--
        <li>
            <span class="nk-share-icon" title="Share page on Pinterest" data-share="pinterest">
                <span class="icon fa fa-pinterest"></span>
            </span>
            <span class="nk-share-name">Pinterest</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on LinkedIn" data-share="linkedin">
                <span class="icon fa fa-linkedin"></span>
            </span>
            <span class="nk-share-name">LinkedIn</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on VK" data-share="vk">
                <span class="icon fa fa-vk"></span>
            </span>
            <span class="nk-share-name">Vkontakte</span>
        </li>
        -->
    </ul>
</div>


<!--
START: Side Buttons
    .nk-side-buttons-visible
-->
<div class="nk-side-buttons">
    <ul>
        <li>
            <a href="https://nkdev.info" target="_blank" class="nk-btn nk-btn-lg link-effect-4">Keep in Touch</a>
        </li>
        <li>
            <span class="nk-btn nk-btn-lg nk-btn-icon nk-bg-audio-toggle">
                <span class="icon">
                    <span class="ion-android-volume-up nk-bg-audio-pause-icon"></span>
                    <span class="ion-android-volume-off nk-bg-audio-play-icon"></span>
                </span>
            </span>
        </li>
        <li class="nk-scroll-top">
            <span class="nk-btn nk-btn-lg nk-btn-icon">
                <span class="icon ion-ios-arrow-up"></span>
            </span>
        </li>
    </ul>
</div>
<!-- END: Side Buttons -->


<!--
START: Search

Additional Classes:
.nk-search-light
-->
<div class="nk-search">
    <div class="container">
        <form action="#">
            <fieldset class="form-group nk-search-field">
                <input type="text" class="form-control" id="searchInput" placeholder="Search..." name="s">
                <label for="searchInput"><i class="ion-ios-search"></i></label>
            </fieldset>
        </form>
    </div>
</div>
<!-- END: Search -->


<!--
START: Shopping Cart

Additional Classes:
.nk-cart-light
-->
<div class="nk-cart">
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="nk-store nk-store-cart">
            <div class="table-responsive">
                <table class="table nk-store-cart-products">
                    <tbody>

                    <tr>
                        <td class="nk-product-cart-thumb">
                            <a href="store-product.php" class="nk-post-image">
                                <img src="assets/images/product-2-sm.png" alt="Men Tshirt" class="nk-img">
                            </a>
                        </td>
                        <td class="nk-product-cart-title">
                            <h2 class="nk-post-title h5">
                                <a href="store-product.php">Men Tshirt</a>
                            </h2>
                        </td>
                        <td class="nk-product-cart-price">$67.00</td>
                        <td class="nk-product-cart-quantity">
                            1
                        </td>
                        <td class="nk-product-cart-total">
                            $67.00
                        </td>
                        <td class="nk-product-cart-remove"><a href="#"><span class="ion-trash-b"></span></a></td>
                    </tr>

                    <tr>
                        <td class="nk-product-cart-thumb">
                            <a href="store-product.php" class="nk-post-image">
                                <img src="assets/images/product-4-sm.png" alt="Men Hoodie" class="nk-img">
                            </a>
                        </td>
                        <td class="nk-product-cart-title">
                            <h2 class="nk-post-title h5">
                                <a href="store-product.php">Men Hoodie</a>
                            </h2>
                        </td>
                        <td class="nk-product-cart-price">$125.00
                            <del>$145.00</del>
                        </td>
                        <td class="nk-product-cart-quantity">
                            2
                        </td>
                        <td class="nk-product-cart-total">
                            $250.00
                        </td>
                        <td class="nk-product-cart-remove"><a href="#"><span class="ion-trash-b"></span></a></td>
                    </tr>

                    </tbody>
                </table>
            </div>

            <div class="nk-gap-2"></div>
            <div class="nk-cart-total">
                Total <span>$317</span>
            </div>

            <div class="nk-gap-3"></div>
            <div class="nk-cart-btns">
                <a href="#" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                    Go to Checkout
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="nk-btn nk-btn-lg link-effect-4 nk-cart-toggle">
                    Continue Shopping
                </a>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
</div>
<!-- END: Shopping Cart -->


<!--
START: Sign Form

Additional Classes:
.nk-sign-form-light
-->
<?php include 'auth.php'; ?>
<!-- END: Sign Form -->


<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Isotope -->
<script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Typed.js -->
<script src="assets/vendor/typed.js/lib/typed.min.js"></script>

<!-- Jquery Validation -->
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="assets/vendor/moment/min/moment.min.js"></script>
<script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- DateTimePicker -->
<script src="assets/vendor/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js"></script>

<!-- Revolution Slider -->
<script src="assets/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<!-- Keymaster -->
<script src="assets/vendor/keymaster/keymaster.js"></script>

<!-- Summernote -->
<script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- GODLIKE -->
<script src="assets/js/godlike.min.js"></script>
<script src="assets/js/godlike-init.js"></script>
<!-- END: Scripts -->


</body>
</html>
