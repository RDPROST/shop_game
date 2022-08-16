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
    <title>GODLIKE | Gaming Template</title>
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
                        <li><a href="page-contact.php">Contact</a></li>
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
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">

                <a href="index.php" class="nk-nav-logo">
                    <img src="assets/images/logo.svg" alt="" width="90">
                </a>


                <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                    <li class="active  nk-drop-item">
                        <a href="index.php">
                            Home</a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="index.php">
                                    Landing</a>
                            </li>
                            <li class="active  ">
                                <a href="index-main.php">
                                    Main</a>
                            </li>
                            <li class="  ">
                                <a href="index-game-promo.php">
                                    Game Promo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="page-contact.php">
                            Features</a>
                        <ul class="dropdown">
                            <li class="  nk-drop-item">
                                <a href="page-contact.php">
                                    Pages</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="forum.php">
                                            Forum</a>
                                    </li>
                                    <li class="  ">
                                        <a href="page-contact.php">
                                            Contact</a>
                                    </li>
                                    <li class="  ">
                                        <a href="page-coming-soon.php">
                                            Coming Soon</a>
                                    </li>
                                    <li class="  ">
                                        <a href="page-404.php">
                                            404</a>
                                    </li>
                                    <li class="  ">
                                        <a href="page-age-check.php">
                                            Age Check</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="  nk-drop-item">
                                <a href="layout-nav-default.php">
                                    Navigations</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="layout-nav-default.php">
                                            Default</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-default-transparent.php">
                                            Default Transparent</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-main-top.php">
                                            Main Top Only</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-main-side.php">
                                            Main Side</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-main-top-fullscreen.php">
                                            Main Top + Fullscreen</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-nav-fullscreen-side.php">
                                            Fullscreen + Side</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="  nk-drop-item">
                                <a href="layout-page-header.php">
                                    Headers</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="layout-header.php">
                                            Size Default</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-sm.php">
                                            Size Small</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-md.php">
                                            Size Mid</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-lg.php">
                                            Size Large</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-full.php">
                                            Size Full</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-video.php">
                                            Video</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-video-plain.php">
                                            Video Plain</a>
                                    </li>
                                    <li class="  ">
                                        <a href="layout-header-no.php">
                                            NO Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="  ">
                                <a href="widgets.php">
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
                                            <a href="element-carousels.php">
                                                Carousels</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-image-boxes.php">
                                                Image Boxes</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-icon-boxes.php">
                                                Icon Boxes</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-counters.php">
                                                Counters</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-blockquotes.php">
                                                Block Quotes</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-testimonials.php">
                                                Testimonials</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-team-members.php">
                                                Team Members</a>
                                        </li>
                                    </ul>

                                </li>

                                <li>

                                    <ul>
                                        <li class="  ">
                                            <a href="element-video-blocks.php">
                                                Video Blocks</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-gif.php">
                                                Gif Animations</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-forms.php">
                                                AJAX Forms</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-countdown.php">
                                                Countdown</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-text-typed.php">
                                                Typed Text</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-tabs.php">
                                                Tabs</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-accordions.php">
                                                Accordions</a>
                                        </li>
                                    </ul>

                                </li>

                                <li>

                                    <ul>
                                        <li class="  ">
                                            <a href="element-info-boxes.php">
                                                Info Boxes / Alerts</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-call-to-action.php">
                                                Call to Action Blocks</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-progress.php">
                                                Progress Bars</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-pagination.php">
                                                Pagination</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-pricing-tables.php">
                                                Pricing Tables</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-modals.php">
                                                Modals</a>
                                        </li>
                                    </ul>

                                </li>

                                <li>

                                    <ul>
                                        <li class="  ">
                                            <a href="element-typography.php">
                                                Typography</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-titles.php">
                                                Titles [headings]</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-dropcaps.php">
                                                Dropcaps</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-colors.php">
                                                Colors</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-buttons.php">
                                                Buttons</a>
                                        </li>
                                        <li class="  ">
                                            <a href="element-breadcrumbs.php">
                                                Breadcrumbs</a>
                                        </li>
                                    </ul>

                                </li>


                            </ul>
                        </div>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="news-list.php">
                            News</a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="news-list.php">
                                    List</a>
                            </li>
                            <li class="  ">
                                <a href="news-list-classic.php">
                                    Classic List</a>
                            </li>
                            <li class="  ">
                                <a href="news-grid-2.php">
                                    Grid 2 Columns</a>
                            </li>
                            <li class="  ">
                                <a href="news-grid-3.php">
                                    Grid 3 Columns</a>
                            </li>
                            <li class="  nk-drop-item">
                                <a href="news-single-image.php">
                                    Single Post</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="news-single-image.php">
                                            Single Image</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-video.php">
                                            Single Video</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-audio.php">
                                            Single Audio</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-gallery.php">
                                            Single Gallery</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-quote.php">
                                            Single Block Quote</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-standard.php">
                                            Single Standard</a>
                                    </li>
                                    <li class="  ">
                                        <a href="news-single-big-content.php">
                                            Single Big Content Example</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="social-user-activity.php">
                            Social</a>
                        <ul class="dropdown">
                            <li class="  nk-drop-item">
                                <a href="social-user-activity.php">
                                    User</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="social-user-activity.php">
                                            Activity</a>
                                    </li>
                                    <li class="  ">
                                        <a href="orders.php">
                                            Notifications</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-messages.php">
                                            Messages</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-messages-single.php">
                                            Messages Single</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-messages-compose.php">
                                            Messages Compose</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-friends.php">
                                            Friends</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-settings.php">
                                            Settings</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-user-settings-email.php">
                                            Settings Email</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="  nk-drop-item">
                                <a href="social-group-activity.php">
                                    Group</a>
                                <ul class="dropdown">
                                    <li class="  ">
                                        <a href="social-group-activity.php">
                                            Activity</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-group-members.php">
                                            Members</a>
                                    </li>
                                    <li class="  ">
                                        <a href="social-group-manage.php">
                                            Manage</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="store.php">
                            Store</a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="store.php">
                                    Store</a>
                            </li>
                            <li class="  ">
                                <a href="store-product.php">
                                    Single Product</a>
                            </li>
                            <li class="  ">
                                <a href="store-cart.php">
                                    Cart</a>
                            </li>
                            <li class="  ">
                                <a href="store-checkout.php">
                                    Checkout</a>
                            </li>
                            <li class="  ">
                                <a href="store-account.php">
                                    Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="gallery.php">
                            Media</a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="gallery.php">
                                    Gallery 1 Column</a>
                            </li>
                            <li class="  ">
                                <a href="gallery-2-col.php">
                                    Gallery 2 Columns</a>
                            </li>
                            <li class="  ">
                                <a href="gallery-3-col.php">
                                    Gallery 3 Columns</a>
                            </li>
                            <li class="  ">
                                <a href="videos.php">
                                    Videos 1 Column</a>
                            </li>
                            <li class="  ">
                                <a href="videos-2-col.php">
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
                    <a href="index.php" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="150">
                    </a>
                </div>

                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                    <ul class="nk-nav">
                        <li class=" ">
                            <a href="page-contact.php">
                                Contact</a>
                        </li>
                        <li class=" ">
                            <a href="page-coming-soon.php">
                                Coming Soon</a>
                        </li>
                        <li class=" ">
                            <a href="page-404.php">
                                404</a>
                        </li>
                        <li class=" ">
                            <a href="page-age-check.php">
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
    <div class="nk-header-title nk-header-title-lg nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <img src="assets/images/image-1.jpg" alt="" class="jarallax-img">
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">


                    <div class="nk-header-text">

                        <h1 class="nk-title display-3">GodLike</h1>

                        <div class="nk-gap-2"></div>
                        <a href="https://themeforest.net/item/godlike-the-game-template/17166433?ref=_nK"
                           target="_blank" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                            <span>Purchase</span>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://nkdev.info/docs/godlike-html/" class="nk-btn nk-btn-lg link-effect-4">
                            <span>Documentation</span>
                        </a>

                        <div class="nk-gap-4"></div>

                    </div>


                </div>
            </div>
        </div>

    </div>
    <!-- END: Header Title -->


    <!-- START: Rev Slider -->
    <div class="mnt-80">
        <div id="rev_slider_50_1_wrapper" class="rev_slider_wrapper fullscreen-container"
             data-alias="photography-carousel48" style="padding:0px;">
            <div id="rev_slider_50_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-185" data-transition="slideoverhorizontal" data-slotamount="7"
                        data-easein="default" data-easeout="default" data-masterspeed="1500"
                        data-thumb="assets/images/gallery-3-thumb.jpg" data-rotate="0" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/gallery-3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-192" data-transition="slideoververtical" data-slotamount="7"
                        data-easein="default" data-easeout="default" data-masterspeed="1500"
                        data-thumb="assets/images/gallery-5-thumb.jpg" data-rotate="0" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/gallery-5.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-186" data-transition="slideoverhorizontal" data-slotamount="7"
                        data-easein="default" data-easeout="default" data-masterspeed="1500"
                        data-thumb="assets/images/gallery-4-thumb.jpg" data-rotate="0" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/gallery-4.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-183" data-transition="slideoververtical" data-slotamount="7"
                        data-easein="default" data-easeout="default" data-masterspeed="1500"
                        data-thumb="assets/images/gallery-1-thumb.jpg" data-rotate="0" data-fstransition="fade"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/gallery-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    </div>
    <!-- END: Rev Slider -->

    <!-- START: Features -->
    <div class="container">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap lg-gap">
            <div class="col-md-4">
                <div class="nk-ibox">
                    <div class="nk-ibox-icon nk-ibox-icon-circle">
                        <span class="ion-ios-game-controller-b"></span>
                    </div>
                    <div class="nk-ibox-cont">
                        <h2 class="nk-ibox-title">Incredible Atmosphere</h2>
                        Second Made make spirit green divide lesser creeping void and night replenish cattle don't was
                        female first their day open.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nk-ibox">
                    <div class="nk-ibox-icon nk-ibox-icon-circle">
                        <span class="ion-fireball"></span>
                    </div>
                    <div class="nk-ibox-cont">
                        <h2 class="nk-ibox-title">Catchy Battles</h2>
                        Image their gathered. Every. Called together signs winged, unto midst sea life air them. Us sea
                        them shall you saw.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nk-ibox">
                    <div class="nk-ibox-icon nk-ibox-icon-circle">
                        <span class="ion-ribbon-a"></span>
                    </div>
                    <div class="nk-ibox-cont">
                        <h2 class="nk-ibox-title">28 Awards</h2>
                        Moveth fruitful it appear wherein man don't firmament set blessed. Beast seas god itself. Made
                        night image male. Own night.
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
    </div>
    <!-- END: Features -->

    <!-- START: About -->
    <div class="nk-box bg-dark-1">
        <div class="container text-center">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <h2 class="nk-title h1">About The Game</h2>
            <div class="nk-gap-3"></div>

            <p class="lead">Together face In. His called Two lesser given divide. From, cattle saying be was doesn't
                set. Creature bearing life wherein dominion in saying them moveth first have. Under set darkness over
                light beast face fill from in after isn't first own all fowl itself evening also, grass doesn't Sea.
                Created very likeness herb wherein from lesser was bring brought above. Bearing tree a grass very.</p>

            <div class="nk-gap-2"></div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="nk-box-2 nk-box-line">
                        <!-- START: Counter -->
                        <div class="nk-counter-3">
                            <div class="nk-count">65</div>
                            <h3 class="nk-counter-title h4">Unique Classes</h3>
                            <div class="nk-gap-1"></div>
                        </div>
                        <!-- END: Counter -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-box-2 nk-box-line">
                        <!-- START: Counter -->
                        <div class="nk-counter-3">
                            <div class="nk-count">145</div>
                            <h3 class="nk-counter-title h4">Epic Bosses</h3>
                            <div class="nk-gap-1"></div>
                        </div>
                        <!-- END: Counter -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-box-2 nk-box-line">
                        <!-- START: Counter -->
                        <div class="nk-counter-3">
                            <div class="nk-count">35</div>
                            <h3 class="nk-counter-title h4">Castles</h3>
                            <div class="nk-gap-1"></div>
                        </div>
                        <!-- END: Counter -->
                    </div>
                </div>
            </div>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-6"></div>
        </div>
    </div>
    <!-- END: About -->

    <!-- START: Video -->
    <div class="container">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=Wb2qjfpOeMo"
                     data-video-thumb="assets/images/video-6-thumb.jpg"></div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
    </div>
    <!-- END: Video -->

    <!-- START: Coming Soon -->
    <div class="nk-box bg-dark-1 text-center">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="bg-image op-3">
            <img src="assets/images/image-3.jpg" alt="" class="jarallax-img">
        </div>
        <div class="container">
            <h2 class="display-4">GodLike II</h2>
            <div class="nk-gap"></div>
            <div>You don't get to be great without a victory...</div>
            <div class="nk-gap-4"></div>

            <div class="nk-countdown" data-end="2018-11-26 08:20" data-timezone="EST"></div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
    </div>
    <!-- END: Coming Soon -->

    <!-- START: Testimonials -->
    <div class="nk-gap-6"></div>
    <div class="nk-gap-2"></div>
    <div class="nk-carousel-2" data-autoplay="12000" data-dots="true">
        <div class="nk-carousel-inner">
            <div>
                <div>
                    <blockquote class="nk-testimonial-2">
                        <div class="nk-testimonial-photo"
                             style="background-image: url('assets/images/avatar-1-sm.jpg');"></div>
                        <div class="nk-testimonial-body">
                            <em>"Bring. Isn't years gathered give made moved. Waters sea forth. It. Gathered own
                                abundantly kind can't it, lesser behold, may."</em>
                        </div>
                        <div class="nk-testimonial-name h4">Lesa Cruz</div>
                        <div class="nk-testimonial-source">Frontend Developer, Google</div>
                    </blockquote>
                </div>
            </div>
            <div>
                <div>
                    <blockquote class="nk-testimonial-2">
                        <div class="nk-testimonial-photo"
                             style="background-image: url('assets/images/avatar-2-sm.jpg');"></div>
                        <div class="nk-testimonial-body">
                            <em>"Years heaven. Dominion light and every appear that creeping all. Light gathering don't
                                given made give open, cattle was light."</em>
                        </div>
                        <div class="nk-testimonial-name h4">Kurt Tucker</div>
                        <div class="nk-testimonial-source">CEO, Envato</div>
                    </blockquote>
                </div>
            </div>
            <div>
                <div>
                    <blockquote class="nk-testimonial-2">
                        <div class="nk-testimonial-photo"
                             style="background-image: url('assets/images/avatar-3-sm.jpg');"></div>
                        <div class="nk-testimonial-body">
                            <em>"Female good moving Very thing form earth, for above herb dominion for made fifth. One
                                them. Seas. Appear fourth seas."</em>
                        </div>
                        <div class="nk-testimonial-name h4">Katie Anderson</div>
                        <div class="nk-testimonial-source">Product Designer, Apple</div>
                    </blockquote>
                </div>
            </div>
            <div>
                <div>
                    <blockquote class="nk-testimonial-2">
                        <div class="nk-testimonial-photo"
                             style="background-image: url('assets/images/avatar-4-sm.jpg');"></div>
                        <div class="nk-testimonial-body">
                            <em>"Yielding be was which heaven fill fruit. You'll shall doesn't green. His divided
                                they're of won't you isn't void cattle."</em>
                        </div>
                        <div class="nk-testimonial-name h4">Luke Fuller</div>
                        <div class="nk-testimonial-source">Copywriter, Dropbox</div>
                    </blockquote>
                </div>
            </div>
            <div>
                <div>
                    <blockquote class="nk-testimonial-2">
                        <div class="nk-testimonial-photo"
                             style="background-image: url('assets/images/avatar-5-sm.jpg');"></div>
                        <div class="nk-testimonial-body">
                            <em>"God, have rule living creature own the signs. Set herb open, seed wherein god appear
                                shall give lights. Waters to."</em>
                        </div>
                        <div class="nk-testimonial-name h4">Felicia Meyer</div>
                        <div class="nk-testimonial-source">Backend Developer, Twitter</div>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-2"></div>
    <div class="nk-gap-6"></div>
    <!-- END: Testimonials -->

    <!-- START: Subscribe -->
    <div class="nk-box bg-dark-1">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <h2 class="nk-title text-center h1">Subscribe to our Newsletter</h2>
                    <div class="nk-gap-3"></div>

                    <!-- START: MailChimp Signup Form -->
                    <form action="//nkdev.us11.list-manage.com/subscribe/post?u=d433160c0c43dcf8ecd52402f&amp;id=7eafafe8f0"
                          method="post" class="nk-mchimp validate" target="_blank">
                        <div class="input-group">
                            <input type="email" value="" name="EMAIL" class="required email form-control"
                                   placeholder="Email *">
                            <button class="nk-btn nk-btn-lg link-effect-4">Subscribe</button>
                        </div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <small>We'll never share your email with anyone else.</small>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                                  name="b_d433160c0c43dcf8ecd52402f_7eafafe8f0"
                                                                                                  tabindex="-1"
                                                                                                  value=""></div>
                    </form>
                    <!-- END: MailChimp Signup Form -->
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Subscribe -->


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


<script type="text/javascript">
    var tpj = jQuery;
    var revapi50;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_50_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_50_1");
        } else {
            revapi50 = tpj("#rev_slider_50_1").show().revolution({
                sliderType: "carousel",
                jsFileLocation: "assets/vendor/revolution/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    onHoverStop: "off",
                },
                carousel: {
                    maxRotation: 8,
                    vary_rotation: "off",
                    minScale: 20,
                    vary_scale: "off",
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "off",
                    vary_fade: "off",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: -90,
                    stretch: "off"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [800, 600, 400, 320],
                gridheight: [600, 400, 320, 280],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 0,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>

</body>
</html>
