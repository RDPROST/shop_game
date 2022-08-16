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
    <title>GODLIKE | Page Header Default</title>
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
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">

                <a href="index.php" class="nk-nav-logo">
                    <img src="assets/images/logo.svg" alt="" width="90">
                </a>


                <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                    <li class="  nk-drop-item">
                        <a href="index.php">
                            Home</a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="index.php">
                                    Landing</a>
                            </li>
                            <li class="  ">
                                <a href="index-main.php">
                                    Main</a>
                            </li>
                            <li class="  ">
                                <a href="index-game-promo.php">
                                    Game Promo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active  nk-drop-item">
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
                            <li class="active  nk-drop-item">
                                <a href="layout-page-header.php">
                                    Headers</a>
                                <ul class="dropdown">
                                    <li class="active  ">
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
                                        <a href="social-user-notifications.php">
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
    <div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <img src="assets/images/image-1.jpg" alt="" class="jarallax-img">
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">


                    <h1 class="nk-title">Page Header Default</h1>


                    <h2 class="nk-sub-title">Optional Sub Title</h2>


                </div>
            </div>
        </div>

    </div>
    <!-- END: Header Title -->


    <div class="nk-gap-4"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Lorem text for demonstration</h2>
                <p>Firmament brought for spirit every. There you&#39;ll abundantly fourth shall one, moveth his <em>evening</em>
                    he greater life you&#39;ll <strong>land</strong> for divided seasons image gathering creature, two.
                    Doesn&#39;t gathering wherein Every Earth brought shall yielding appear so upon one one shall
                    gathered from face for fourth creature whose divided.</p>

                <p>Tree sea fowl evening kind the whose don&#39;t Male you&#39;re Rule signs subdue she&#39;d heaven is
                    make. In. Creature called i won&#39;t, make winged god <em>lesser</em> firmament evening him hath so
                    thing spirit land first all there had said divide every you&#39;re together, for for. Grass seasons
                    divided Firmament second rule without cattle, spirit.</p>

                <p>Bring you&#39;ll signs fly face whose hath heaven so fly good. Moved. Moving yielding tree morning.
                    Unto firmament fly midst is divided dominion, male form beast. One above Forth lights after upon
                    together whose man, our that heaven they&#39;re rule deep all beast morning winged fruitful made air
                    isn&#39;t waters.</p>

                <p>Yielding in, cattle was you&#39;re green darkness in them two night rule light whales midst creature
                    Darkness bearing shall from shall whales. Fifth fly saw open. Night dominion, dominion
                    <em>years</em> fill Deep abundantly <em>fourth</em> whales every <em>behold</em> waters bearing isn&#39;t
                    life first, beginning him whose dominion herb. Midst wherein divide midst his you&#39;re isn&#39;t
                    man don&#39;t i give. Greater evening green herb.</p>

                <p>A sea great made created and under so. He stars fly. Moving bring. That fly fifth unto, under divide
                    <em>you</em> seasons <strong>seas</strong> cattle their Don&#39;t saying. Gathering dominion Male.
                    Let face made land, own firmament set made.</p>

                <p>Creature all them, second his beginning she&#39;d. Don&#39;t set form good whose female own and.
                    Life. God saying for be god replenish gathered bearing man have. They&#39;re void bring living
                    <strong>in</strong> it abundantly made in for subdue yielding cattle waters <em>signs</em> god
                    subdue divided creepeth whose sixth moveth yielding.</p>
            </div>
        </div>

    </div>

    <div class="nk-gap-4"></div>


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


</body>
</html>
