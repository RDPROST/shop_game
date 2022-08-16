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
    <title>GODLIKE | Men Hoodie</title>
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
<div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true"
     data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0"
     data-video-pause-on-page-leave="true" style="background-image: url('assets/images/page-background.jpg');"></div>
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
<div class="nk-page-background-audio d-none" data-audio="assets/mp3/purpleplanetmusic-desolation.mp3"
     data-audio-volume="100" data-audio-autoplay="true" data-audio-loop="true"
     data-audio-pause-on-page-leave="true"></div>
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
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">


    <!--
        START: Top Contacts
    
        Additional Classes:
            .nk-contacts-top-light
    -->
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-left">
                <div class="nk-navbar">
                    <ul class="nk-nav">
                        <li class="nk-drop-item">
                            <a href="#">USA</a>
                            <ul class="dropdown">
                                <li><a href="#">USA</a></li>
                                <li><a href="#">Russia</a></li>
                                <li><a href="#">United Kingdom</a></li>
                                <li><a href="#">France</a></li>
                                <li><a href="#">Spain</a></li>
                                <li><a href="#">Germany</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="page-contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="nk-contacts-right">
                <div class="nk-navbar">
                    <ul class="nk-nav">
                        <li><a href="https://twitter.com/nkdevv" target="_blank"><span
                                        class="ion-social-twitter"></span></a></li>
                        <li><a href="https://dribbble.com/_nK" target="_blank"><span
                                        class="ion-social-dribbble-outline"></span></a></li>
                        <li><a href="#"><span class="ion-social-instagram-outline"></span></a></li>
                        <li><a href="#"><span class="ion-social-pinterest"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Top Contacts -->


    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
            .nk-navbar-light
            .nk-navbar-no-link-effect
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">

                <a href="index.html" class="nk-nav-logo">
                    <img src="assets/images/logo.svg" alt="" width="90">
                </a>


                <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                    <li class="  nk-drop-item">
                        <a href="index.html">
                            Home</a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="index.html">
                                    Landing</a>
                            </li>
                            <li class="  ">
                                <a href="index-main.html">
                                    Main</a>
                            </li>
                            <li class="  ">
                                <a href="index-game-promo.html">
                                    Game Promo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="page-contact.html">
                            Features</a>
                        <ul class="dropdown">
                            <li class="  nk-drop-item">
                                <a href="page-contact.html">
                                    Pages</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="forum.html">
                                            Forum</a>
                                    </li>
                                    <li class="  ">
                                        <a href="page-contact.html">
                                            Contact</a>
                                    </li>
                                    <li class="  ">
                                        <a href="page-coming-soon.html">
                                            Coming Soon</a>
                                    </li>
                                    <li class="  ">
                                        <a href="page-404.html">
                                            404</a>
                                    </li>
                                    <li class="  ">
                                        <a href="page-age-check.html">
                                            Age Check</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="  nk-drop-item">
                                <a href="layout-nav-default.html">
                                    Navigations</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="layout-nav-default.html">
                                            Default</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-default-transparent.html">
                                            Default Transparent</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-main-top.html">
                                            Main Top Only</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-main-side.html">
                                            Main Side</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-main-top-fullscreen.html">
                                            Main Top + Fullscreen</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-fullscreen-side.html">
                                            Fullscreen + Side</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="  nk-drop-item">
                                <a href="layout-page-header.html">
                                    Headers</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="layout-header.html">
                                            Size Default</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-sm.html">
                                            Size Small</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-md.html">
                                            Size Mid</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-lg.html">
                                            Size Large</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-full.html">
                                            Size Full</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-video.html">
                                            Video</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-video-plain.html">
                                            Video Plain</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-no.html">
                                            NO Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="  ">
                                <a href="widgets.html">
                                    Widgets</a>
                            </li>
                            <li class="  ">
                                <a href="https://nkdev.info/docs/godlike-html/">
                                    Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nk-mega-item nk-drop-item">
                        <a href="#">
                            Elements</a>
                        <div class="dropdown">
                            <div class="bg-image">
                                <img src="assets/images/bg-menu.jpg" alt="" class="jarallax-img">
                            </div>
                            <ul>


                                <li>

                                    <ul>
                                        <li class="  ">
                                            <a href="element-carousels.html">
                                                Carousels</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-image-boxes.html">
                                                Image Boxes</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-icon-boxes.html">
                                                Icon Boxes</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-counters.html">
                                                Counters</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-blockquotes.html">
                                                Block Quotes</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-testimonials.html">
                                                Testimonials</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-team-members.html">
                                                Team Members</a>
                                        </li>
                                    </ul>

                                </li>

                                <li>

                                    <ul>
                                        <li class="  ">
                                            <a href="element-video-blocks.html">
                                                Video Blocks</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-gif.html">
                                                Gif Animations</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-forms.html">
                                                AJAX Forms</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-countdown.html">
                                                Countdown</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-text-typed.html">
                                                Typed Text</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-tabs.html">
                                                Tabs</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-accordions.html">
                                                Accordions</a>
                                        </li>
                                    </ul>

                                </li>

                                <li>

                                    <ul>
                                        <li class="  ">
                                            <a href="element-info-boxes.html">
                                                Info Boxes / Alerts</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-call-to-action.html">
                                                Call to Action Blocks</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-progress.html">
                                                Progress Bars</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-pagination.html">
                                                Pagination</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-pricing-tables.html">
                                                Pricing Tables</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-modals.html">
                                                Modals</a>
                                        </li>
                                    </ul>

                                </li>

                                <li>

                                    <ul>
                                        <li class="  ">
                                            <a href="element-typography.html">
                                                Typography</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-titles.html">
                                                Titles [headings]</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-dropcaps.html">
                                                Dropcaps</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-colors.html">
                                                Colors</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-buttons.html">
                                                Buttons</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-breadcrumbs.html">
                                                Breadcrumbs</a>
                                        </li>
                                    </ul>

                                </li>


                            </ul>
                        </div>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="news-list.html">
                            News</a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="news-list.html">
                                    List</a>
                            </li>
                            <li class="  ">
                                <a href="news-list-classic.html">
                                    Classic List</a>
                            </li>
                            <li class="  ">
                                <a href="news-grid-2.html">
                                    Grid 2 Columns</a>
                            </li>
                            <li class="  ">
                                <a href="news-grid-3.html">
                                    Grid 3 Columns</a>
                            </li>
                            <li class="  nk-drop-item">
                                <a href="news-single-image.html">
                                    Single Post</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="news-single-image.html">
                                            Single Image</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-video.html">
                                            Single Video</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-audio.html">
                                            Single Audio</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-gallery.html">
                                            Single Gallery</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-quote.html">
                                            Single Block Quote</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-standard.html">
                                            Single Standard</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-big-content.html">
                                            Single Big Content Example</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="social-user-activity.html">
                            Social</a>
                        <ul class="dropdown">
                            <li class="  nk-drop-item">
                                <a href="social-user-activity.html">
                                    User</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="social-user-activity.html">
                                            Activity</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-notifications.html">
                                            Notifications</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-messages.html">
                                            Messages</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-messages-single.html">
                                            Messages Single</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-messages-compose.html">
                                            Messages Compose</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-friends.html">
                                            Friends</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-settings.html">
                                            Settings</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-settings-email.html">
                                            Settings Email</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="  nk-drop-item">
                                <a href="social-group-activity.html">
                                    Group</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="social-group-activity.html">
                                            Activity</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-group-members.html">
                                            Members</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-group-manage.html">
                                            Manage</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="active  nk-drop-item">
                        <a href="store.html">
                            Store</a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="store.html">
                                    Store</a>
                            </li>
                            <li class="active  ">
                                <a href="store-product.html">
                                    Single Product</a>
                            </li>
                            <li class="  ">
                                <a href="store-cart.html">
                                    Cart</a>
                            </li>
                            <li class="  ">
                                <a href="store-checkout.html">
                                    Checkout</a>
                            </li>
                            <li class="  ">
                                <a href="store-account.html">
                                    Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="gallery.html">
                            Media</a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="gallery.html">
                                    Gallery 1 Column</a>
                            </li>
                            <li class="  ">
                                <a href="gallery-2-col.html">
                                    Gallery 2 Columns</a>
                            </li>
                            <li class="  ">
                                <a href="gallery-3-col.html">
                                    Gallery 3 Columns</a>
                            </li>
                            <li class="  ">
                                <a href="videos.html">
                                    Videos 1 Column</a>
                            </li>
                            <li class="  ">
                                <a href="videos-2-col.html">
                                    Videos 2 Columns</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nk-nav nk-nav-right nk-nav-icons">

                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                        </a>
                    </li>


                    <li class="single-icon">
                        <a href="#" class="nk-search-toggle no-link-effect">
                            <span class="nk-icon-search"></span>
                        </a>
                    </li>


                    <li class="single-icon">
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


                    <li class="single-icon">
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


                    <li class="single-icon">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-side">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>


<!--
    START: Right Navbar

    Additional Classes:
        .nk-navbar-right-side
        .nk-navbar-left-side
        .nk-navbar-lg
        .nk-navbar-align-center
        .nk-navbar-align-right
        .nk-navbar-overlay-content
        .nk-navbar-light
        .nk-navbar-no-link-effect
-->

<nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content"
     id="nk-side">

    <div class="nk-navbar-bg">
        <div class="bg-image">
            <img src="assets/images/bg-nav-side.jpg" alt="" class="jarallax-img">
        </div>
    </div>


    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">

                <div class="nk-nav-row">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="150">
                    </a>
                </div>

                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                    <ul class="nk-nav">
                        <li class=" ">
                            <a href="page-contact.html">
                                Contact</a>
                        </li>
                        <li class=" ">
                            <a href="page-coming-soon.html">
                                Coming Soon</a>
                        </li>
                        <li class=" ">
                            <a href="page-404.html">
                                404</a>
                        </li>
                        <li class=" ">
                            <a href="page-age-check.html">
                                Age Check</a>
                        </li>
                        <li class=" nk-drop-item">
                            <a href="#">
                                Sub Menu Example</a>
                            <ul class="dropdown">
                                <li class=" ">
                                    <a href="#1">
                                        Sub Item 1</a>
                                </li>
                                <li class=" nk-drop-item">
                                    <a href="#2">
                                        Sub Item 2</a>
                                    <ul class="dropdown">
                                        <li class=" ">
                                            <a href="#1">
                                                Sub Item 1</a>
                                        </li>
                                        <li class=" ">
                                            <a href="#2">
                                                Sub Item 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" nk-drop-item">
                                    <a href="#3">
                                        Sub Item 3</a>
                                    <ul class="dropdown">
                                        <li class=" ">
                                            <a href="#">
                                                Sub Item</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" nk-drop-item">
                                    <a href="#4">
                                        Sub Item 4</a>
                                    <ul class="dropdown">
                                        <li class=" ">
                                            <a href="#">
                                                Sub Item</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
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
<!-- END: Right Navbar -->


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
            <a href="index.html" class="nk-nav-logo">
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


    <div class="container">
        <div class="nk-gap-4"></div>
        <div class="nk-store-product">
            <div class="row xl-gap vertical-gap align-items-center">
                <div class="col-md-5">
                    <!-- START: Product Photos Carousel -->
                    <div class="nk-carousel-3" data-size="1">
                        <div class="nk-carousel-inner nk-popup-gallery">

                            <div>
                                <div>
                                    <a href="assets/images/product-4.png" class="nk-gallery-item"
                                       data-size="780x990"><img src="assets/images/product-4-sm.png" alt=""></a>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <a href="assets/images/product-4-blue.png" class="nk-gallery-item"
                                       data-size="780x990"><img src="assets/images/product-4-blue-sm.png" alt=""></a>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <a href="assets/images/product-4-green.png" class="nk-gallery-item"
                                       data-size="780x990"><img src="assets/images/product-4-green-sm.png" alt=""></a>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <a href="assets/images/product-4-orange.png" class="nk-gallery-item"
                                       data-size="780x990"><img src="assets/images/product-4-orange-sm.png" alt=""></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END: Product Photos Carousel -->
                </div>
                <div class="col-md-7">
                    <h2 class="nk-product-title">Men Hoodie</h2>

                    <div class="nk-product-description">
                        <p>And gathering. Form for, gathering, female you'll blessed appear day us cattle hath be moving
                            face he Whales fruitful is spirit Beginning. Abundantly good living Thing isn't stars saw
                            over and earth dry rule herb bring image night, fowl their, third set saw for.</p>
                    </div>

                    <div class="nk-product-size">
                        <h4 class="h5">Size</h4>
                        <div class="nk-size-selector">
                            <input id="product-size-s" type="radio" name="product-size" value="S">
                            <label for="product-size-s">S</label>

                            <input id="product-size-m" type="radio" name="product-size" value="M" checked>
                            <label for="product-size-m">M</label>

                            <input id="product-size-l" type="radio" name="product-size" value="L">
                            <label for="product-size-l">L</label>

                            <input id="product-size-xl" type="radio" name="product-size" value="XL">
                            <label for="product-size-xl">XL</label>
                        </div>
                    </div>

                    <div class="nk-product-color">
                        <h4 class="h5">Color</h4>
                        <div class="nk-color-selector">
                            <input id="product-color-black" type="radio" name="product-color" value="black" checked>
                            <label for="product-color-black"
                                   style="background-color: #3A3A3A; color: #3A3A3A;">black</label>

                            <input id="product-color-blue" type="radio" name="product-color" value="blue">
                            <label for="product-color-blue"
                                   style="background-color: #558dc8; color: #558dc8;">blue</label>

                            <input id="product-color-green" type="radio" name="product-color" value="green">
                            <label for="product-color-green"
                                   style="background-color: #48ac55; color: #48ac55;">green</label>

                            <input id="product-color-orange" type="radio" name="product-color" value="orange">
                            <label for="product-color-orange"
                                   style="background-color: #c89355; color: #c89355;">orange</label>
                        </div>
                    </div>

                    <form action="#" class="nk-form nk-product-addtocart">
                        <div class="nk-form-control-number">
                            <input type="number" min="1" max="14" name="quantity" value="1" class="form-control">
                        </div>
                        <button class="nk-btn nk-btn-x2 link-effect-4">Add to Cart</button>
                        <span class="nk-product-price">$125.00 <del>$145.00</del></span>
                    </form>
                </div>
            </div>

            <div class="nk-gap-3"></div>
            <!-- START: Tabs -->
            <div class="nk-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab-description" role="tab" data-toggle="tab">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-parameters" role="tab" data-toggle="tab">Parameters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-reviews" role="tab" data-toggle="tab">Reviews <small>(3)</small></a>
                    </li>
                </ul>

                <div class="tab-content">

                    <!-- START: Tab Description -->
                    <div role="tabpanel" class="tab-pane fade show active" id="tab-description">
                        <div class="nk-gap-3"></div>
                        <div class="nk-box-3 bg-dark-1">
                            <p>And gathering. Form for, gathering, female you'll blessed appear day us cattle hath be
                                moving face he Whales fruitful is spirit Beginning. Abundantly good living Thing isn't
                                stars saw over and earth dry rule herb bring image night, fowl their, third set saw for.
                                Green a also upon life stars, green and darkness greater.</p>
                            <p>The light two his moving won't a kind unto they're sea sea subdue fowl light male forth
                                second beginning. Saying seas signs. Seed brought air grass. Divided Meat god subdue
                                own. He. Female form very cattle man i sixth. Beast living darkness open god bring image
                                divide. Third which.</p>
                            <p>He. Herb created. Beginning. Gathering given our winged sea Two is image us life from
                                seed so darkness and his replenish they're There, creature isn't divide face replenish
                                creature. His gathered midst brought divided land without face were, midst multiply.</p>
                            <p>Place and the unto itself image also. Night earth good also gathered forth man cattle
                                very open. Unto fill is. Midst together of, it you're own He sea fifth day moving spirit
                                can't meat heaven fowl fruit isn't called fruitful made earth also. Him fourth upon To
                                upon fill face. Also earth light shall also green. Grass.</p>
                        </div>
                    </div>
                    <!-- END: Tab Description -->

                    <!-- START: Tab Parameters -->
                    <div role="tabpanel" class="tab-pane fade" id="tab-parameters">
                        <div class="nk-gap-3"></div>
                        <div class="nk-box-3 bg-dark-1">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Brand</td>
                                    <td>Welder</td>
                                </tr>
                                <tr>
                                    <td>SKU</td>
                                    <td>S18-9247</td>
                                </tr>
                                <tr>
                                    <td>Material Type</td>
                                    <td>Mineral</td>
                                </tr>
                                <tr>
                                    <td>Display Type</td>
                                    <td>Analog</td>
                                </tr>
                                <tr>
                                    <td>Case Material</td>
                                    <td>Stainless Steel</td>
                                </tr>
                                <tr>
                                    <td>Case Diameter</td>
                                    <td>50mm</td>
                                </tr>
                                <tr>
                                    <td>Band Material</td>
                                    <td>Rubber</td>
                                </tr>
                                <tr>
                                    <td>Band width</td>
                                    <td>23mm</td>
                                </tr>
                                <tr>
                                    <td>Movement</td>
                                    <td>Quartz</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- END: Tab Parameters -->

                    <!-- START: Tab Reviews -->
                    <div role="tabpanel" class="tab-pane fade" id="tab-reviews">
                        <div class="nk-gap-3"></div>
                        <div class="row vertical-gap lg-gap">
                            <div class="col-md-6">

                                <!-- START: Reviews Summary Rating -->
                                <div class="nk-box-3 bg-dark-1">
                                    <h3 class="nk-title h4 text-center">Reviews Summary</h3>
                                    <div class="nk-gap"></div>

                                    <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 94%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>

                                    <br>
                                    <small>4.7 out of 5.0</small>

                                    <div class="nk-product-progress">
                                        <table>
                                            <tr>
                                                <td>5 Star</td>
                                                <td>
                                                    <div class="nk-progress nk-progress-xs nk-progress-percent-static nk-count"
                                                         data-progress="82" data-progress-mask="{$}%">
                                                        <div class="nk-progress-line">
                                                            <div style="width: 82%;">
                                                                <div class="nk-progress-percent">82%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4 Star</td>
                                                <td>
                                                    <div class="nk-progress nk-progress-xs nk-progress-percent-static nk-count"
                                                         data-progress="10" data-progress-mask="{$}%">
                                                        <div class="nk-progress-line">
                                                            <div style="width: 10%;">
                                                                <div class="nk-progress-percent">10%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3 Star</td>
                                                <td>
                                                    <div class="nk-progress nk-progress-xs nk-progress-percent-static nk-count"
                                                         data-progress="2" data-progress-mask="{$}%">
                                                        <div class="nk-progress-line">
                                                            <div style="width: 2%;">
                                                                <div class="nk-progress-percent">2%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2 Star</td>
                                                <td>
                                                    <div class="nk-progress nk-progress-xs nk-progress-percent-static nk-count"
                                                         data-progress="5" data-progress-mask="{$}%">
                                                        <div class="nk-progress-line">
                                                            <div style="width: 5%;">
                                                                <div class="nk-progress-percent">5%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1 Star</td>
                                                <td>
                                                    <div class="nk-progress nk-progress-xs nk-progress-percent-static nk-count"
                                                         data-progress="1" data-progress-mask="{$}%">
                                                        <div class="nk-progress-line">
                                                            <div style="width: 1%;">
                                                                <div class="nk-progress-percent">1%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- END: Reviews Summary Rating -->

                            </div>
                            <div class="col-md-6">
                                <!-- START: Reply -->
                                <div class="nk-box-3 bg-dark-1">
                                    <h3 class="nk-title h4 text-center">Add a Review</h3>
                                    <div class="nk-gap"></div>
                                    <div class="nk-reply mt-0">
                                        <form action="#" class="nk-form nk-form-style-1">
                                            <div class="nk-rating">
                                                <input type="radio" id="review-rate-5" name="review-rate" value="5">
                                                <label for="review-rate-5">
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-4" name="review-rate" value="4">
                                                <label for="review-rate-4">
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    </i>
                                                </label>

                                                <input type="radio" id="review-rate-3" name="review-rate" value="3">
                                                <label for="review-rate-3">
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-2" name="review-rate" value="2">
                                                <label for="review-rate-2">
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-1" name="review-rate" value="1">
                                                <label for="review-rate-1">
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>
                                            </div>
                                            <div class="nk-gap"></div>
                                            <div class="row vertical-gap">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control required" name="name"
                                                           placeholder="Name *">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control required" name="title"
                                                           placeholder="Title *">
                                                </div>
                                            </div>
                                            <div class="nk-gap-1"></div>
                                            <textarea class="form-control required" name="message" rows="5"
                                                      placeholder="Your Review *" aria-required="true"></textarea>
                                            <div class="nk-gap-1"></div>
                                            <button class="nk-btn nk-btn-lg link-effect-4 float-right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- END: Reply -->
                            </div>
                        </div>

                        <div class="nk-gap-3"></div>
                        <div class="nk-comments mb-0">
                            <h3 class="nk-title h4 text-center">3 Reviews</h3>
                            <div class="nk-gap-2"></div>

                            <!-- START: Review -->
                            <div class="nk-comment">
                                <div class="nk-comment-avatar">
                                    <a href="#"><img src="assets/images/avatar-2.jpg" alt=""></a>
                                </div>
                                <div class="nk-comment-meta">
                                    <div>
                                        
    <span class="nk-product-rating nk-review-rating">
        <span class="nk-product-rating-front" style="width: 80%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>

                                    </div>
                                    <div class="nk-comment-name h5">
                                        <a href="#">Kurt Tucker</a>
                                    </div>
                                    <div class="nk-comment-date">
                                        20 September, 2017
                                    </div>
                                </div>
                                <p>Moveth. Above firmament itself living. Given i fruitful sixth moveth. Their she'd
                                    him. Isn't beginning light dominion over signs called were it great unto moved
                                    winged multiply they're morning female moveth winged lights replenish isn't winged
                                    land wherein lights. Over dominion abundantly made brought you're.</p>

                                <p>Upon replenish great rule. Were tree, given day him night Fruit it moveth all. First
                                    they're creature seasons and creature fill a it have fifth, their own subdue brought
                                    above divided.</p>

                                <p>Behold it set, seas seas and meat divided Moveth cattle forth evening above moveth
                                    so, signs god a fruitful his after called that whose.</p>

                                <div class="text-right">
                                    <div class="nk-action-like">
                                        <span class="like-icon fa fa-thumbs-up"></span>
                                        <span class="num">+12</span>
                                        <span class="dislike-icon fa fa-thumbs-down"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Review -->
                            <!-- START: Review -->
                            <div class="nk-comment">
                                <div class="nk-comment-avatar">
                                    <a href="#"><img src="assets/images/avatar-1.jpg" alt=""></a>
                                </div>
                                <div class="nk-comment-meta">
                                    <div>
                                        
    <span class="nk-product-rating nk-review-rating">
        <span class="nk-product-rating-front" style="width: 20%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>

                                    </div>
                                    <div class="nk-comment-name h5">
                                        <a href="#">Lesa Cruz</a>
                                    </div>
                                    <div class="nk-comment-date">
                                        14 Jule, 2017
                                    </div>
                                </div>
                                <p>Shit :( No any words for this hoodie!!!</p>

                                <div class="text-right">
                                    <div class="nk-action-like disliked">
                                        <span class="like-icon fa fa-thumbs-up"></span>
                                        <span class="num">-193</span>
                                        <span class="dislike-icon fa fa-thumbs-down"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Review -->
                            <!-- START: Review -->
                            <div class="nk-comment">
                                <div class="nk-comment-avatar">
                                    <a href="#"><img src="assets/images/avatar-3.jpg" alt=""></a>
                                </div>
                                <div class="nk-comment-meta">
                                    <div>
                                        
    <span class="nk-product-rating nk-review-rating">
        <span class="nk-product-rating-front" style="width: 100%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>

                                    </div>
                                    <div class="nk-comment-name h5">
                                        <a href="#">Katie Anderson</a>
                                    </div>
                                    <div class="nk-comment-date">
                                        27 June, 2017
                                    </div>
                                </div>
                                <p>Above he image Give abundantly abundantly land make there kind. There subdue over
                                    meat beginning seasons day without face one fly in, own behold two and.</p>

                                <p>Lesser. Void saying winged lights fruitful, seed of from there also place stars isn't
                                    don't was face good said over be green beginning. Unto and multiply is, living, a.
                                    Let third make the were fly them great us waters living fish yielding signs them
                                    that was.</p>

                                <p>Replenish divide male yielding tree you're man be there, fowl, divide grass of above
                                    wherein void thing also, fill make lights made our greater female you're fruitful it
                                    sea. That. Heaven land. Without called spirit heaven itself. Stars, man bring be dry
                                    have Said bring.</p>

                                <p>To fourth doesn't days. Grass one. Stars unto is herb open in sea moved so. They're
                                    our doesn't a dominion great given i Day. Fourth. Sea Third every, have us, bring
                                    god itself life which brought fly without. Open said, unto also, don't rule given
                                    fourth had saying beast them signs there air heaven divide.</p>

                                <div class="text-right">
                                    <div class="nk-action-like liked">
                                        <span class="like-icon fa fa-thumbs-up"></span>
                                        <span class="num">+2947</span>
                                        <span class="dislike-icon fa fa-thumbs-down"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Review -->
                        </div>
                    </div>
                    <!-- END: Tab Reviews -->

                </div>
            </div>
            <!-- END: Tabs -->
        </div>
        <!-- START: Related Products -->
        <div class="nk-gap-3"></div>
        <div class="nk-store nk-carousel-2 nk-carousel-x2 nk-carousel-no-margin nk-carousel-all-visible">
            <div class="nk-carousel-inner">

                <div>
                    <div>
                        <div class="nk-product">
                            <div>
                                <a href="store-product.html" class="nk-product-image">
                                    <img src="assets/images/product-1-sm.png" alt="Women Tshirt" class="nk-img-stretch">
                                </a>

                                <h2 class="nk-product-title h5"><a href="store-product.html">Women Tshirt</a></h2>


                                <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 90%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>


                                <div class="nk-product-bottom">
                                    <div>
                                        <div class="nk-product-price">$67.00</div>
                                        <a href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="nk-product">
                            <div>
                                <a href="store-product.html" class="nk-product-image">
                                    <img src="assets/images/product-2-sm.png" alt="Men Tshirt" class="nk-img-stretch">
                                </a>

                                <h2 class="nk-product-title h5"><a href="store-product.html">Men Tshirt</a></h2>


                                <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 50%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>


                                <div class="nk-product-bottom">
                                    <div>
                                        <div class="nk-product-price">$67.00</div>
                                        <a href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="nk-product">
                            <div>
                                <a href="store-product.html" class="nk-product-image">
                                    <img src="assets/images/product-3-sm.png" alt="Women Hoodie" class="nk-img-stretch">
                                </a>

                                <h2 class="nk-product-title h5"><a href="store-product.html">Women Hoodie</a></h2>


                                <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 100%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>


                                <div class="nk-product-bottom">
                                    <div>
                                        <div class="nk-product-price">$125.00</div>
                                        <a href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="nk-product">
                            <div>
                                <a href="store-product.html" class="nk-product-image">
                                    <img src="assets/images/product-4-sm.png" alt="Men Hoodie" class="nk-img-stretch">
                                </a>

                                <h2 class="nk-product-title h5"><a href="store-product.html">Men Hoodie</a></h2>


                                <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: ;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>


                                <div class="nk-product-bottom">
                                    <div>
                                        <div class="nk-product-price">$125.00
                                            <del>$145.00</del>
                                        </div>
                                        <a href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="nk-product">
                            <div>
                                <a href="store-product.html" class="nk-product-image">
                                    <img src="assets/images/product-5-sm.png" alt="Women Cap" class="nk-img-stretch">
                                </a>

                                <h2 class="nk-product-title h5"><a href="store-product.html">Women Cap</a></h2>


                                <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 80%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>


                                <div class="nk-product-bottom">
                                    <div>
                                        <div class="nk-product-price">$25.99</div>
                                        <a href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="nk-product">
                            <div>
                                <a href="store-product.html" class="nk-product-image">
                                    <img src="assets/images/product-6-sm.png" alt="Men Cap" class="nk-img-stretch">
                                </a>

                                <h2 class="nk-product-title h5"><a href="store-product.html">Men Cap</a></h2>


                                <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 60%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>


                                <div class="nk-product-bottom">
                                    <div>
                                        <div class="nk-product-price">$25.99</div>
                                        <a href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END: Related Products -->
        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>


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
<div class="nk-share-buttons nk-share-buttons-left d-none d-md-flex">
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
<div class="nk-side-buttons nk-side-buttons-visible">
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
                            <a href="store-product.html" class="nk-post-image">
                                <img src="assets/images/product-2-sm.png" alt="Men Tshirt" class="nk-img">
                            </a>
                        </td>
                        <td class="nk-product-cart-title">
                            <h2 class="nk-post-title h5">
                                <a href="store-product.html">Men Tshirt</a>
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
                            <a href="store-product.html" class="nk-post-image">
                                <img src="assets/images/product-4-sm.png" alt="Men Hoodie" class="nk-img">
                            </a>
                        </td>
                        <td class="nk-product-cart-title">
                            <h2 class="nk-post-title h5">
                                <a href="store-product.html">Men Hoodie</a>
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
