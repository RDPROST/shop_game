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
    <title>GODLIKE | Sidebar Widgets</title>
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
<div class="nk-page-background op-5" data-video="https://youtu.be/4dd9R9dWYnQ" data-video-loop="true"
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
                            <li class="active  ">
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


                    <?php include 'include/cart-counter.php'; ?>


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
    <div class="nk-header-title nk-header-title-sm nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <img src="assets/images/image-1.jpg" alt="" class="jarallax-img">
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">


                    <h1 class="nk-title">Sidebar Widgets</h1>


                    <h2 class="nk-sub-title">Demonstration for available widgets</h2>


                </div>
            </div>
        </div>

    </div>
    <!-- END: Header Title -->


    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="nk-gap-4"></div>
                <p>Cursus placerat libero Velit scelerisque mollis. Sollicitudin. Fames commodo lectus venenatis porta.
                    Vulputate neque placerat libero massa elit sapien adipiscing. Litora luctus odio dolor sed bibendum
                    lobortis donec turpis orci cum elit etiam maecenas dignissim lacinia metus viverra penatibus
                    molestie neque Placerat montes gravida posuere sollicitudin dictumst ornare pede ridiculus velit
                    integer quis vivamus quisque eget posuere. Per pede eros urna lacus leo elementum nam. Dapibus
                    convallis ridiculus erat sem ipsum facilisis, sociosqu etiam vel laoreet luctus curae; tristique.
                    Nam.</p>

                <p>Amet tempor orci non nam porta felis. Viverra porta. Sociosqu parturient. Dictum malesuada tortor
                    orci praesent conubia dapibus sociosqu leo mauris rutrum montes laoreet consequat habitant per
                    taciti amet platea dui dapibus netus curabitur elementum ridiculus. Sollicitudin dictum adipiscing
                    sit amet elementum dictum pharetra odio Montes. Platea ridiculus urna fermentum. Nec. Tellus. Et
                    nulla nam. Vel.</p>

                <p>Class, orci fames donec congue nisi. Rhoncus potenti, lobortis at egestas. Fames proin auctor
                    scelerisque sem ultricies amet mauris montes velit nulla dapibus neque augue conubia nulla sagittis.
                    Neque dignissim lacus nullam massa lobortis litora egestas. Nisl. Cursus nisl tempor et dapibus
                    dapibus. Pellentesque euismod amet mi fringilla vitae varius. Vel. Scelerisque et orci nunc lobortis
                    id litora sit odio donec primis. Ad porta aliquam posuere nibh. Sollicitudin id faucibus ultricies,
                    suspendisse tristique.</p>

                <p>Vivamus, pulvinar. Aenean commodo feugiat, non Quisque sollicitudin mauris urna inceptos adipiscing
                    proin egestas, non hymenaeos aenean quam bibendum rhoncus. Habitant nec velit potenti vehicula
                    porttitor. Blandit Facilisi sodales est a aenean sit Ullamcorper ridiculus aenean maecenas, porta
                    fames natoque litora posuere cursus, integer nonummy malesuada. Congue, erat rutrum hymenaeos
                    laoreet. Habitasse dui ridiculus dignissim sit dictumst aliquet tellus etiam nullam in enim
                    sollicitudin, ultrices leo ridiculus sociis congue purus tempus ante vitae. Enim lectus class
                    aliquet at cum enim neque maecenas feugiat inceptos est, pharetra orci nisl maecenas et ultricies
                    natoque. Inceptos.</p>

                <p>Arcu purus mollis faucibus erat posuere. Sociis metus mus quam lectus ligula Ligula sem cras.
                    Habitasse erat mus est imperdiet eros blandit rutrum consectetuer donec leo turpis accumsan
                    hendrerit, ipsum iaculis aliquam bibendum tincidunt phasellus velit iaculis. A conubia vehicula
                    fames nonummy, aenean semper, facilisi eleifend nullam duis erat vehicula magnis nibh maecenas quis
                    diam cras Primis morbi mattis placerat ullamcorper in sodales aliquam integer. Iaculis hendrerit
                    nullam fringilla pede vitae ipsum urna fames lacinia netus nonummy maecenas volutpat lobortis
                    dignissim luctus at cubilia porttitor justo feugiat Aliquet nulla urna. Faucibus. Feugiat libero
                    phasellus vulputate interdum pellentesque accumsan. Pede arcu imperdiet.</p>

                <p>Fames at netus convallis ullamcorper suspendisse inceptos sociosqu molestie quisque egestas dolor non
                    per integer adipiscing sodales nonummy sodales molestie auctor ac magnis convallis magna ut
                    phasellus laoreet. Nostra montes, litora nunc tortor massa. Posuere arcu est lobortis. Turpis orci
                    nisl mus nullam varius amet ut blandit aliquam scelerisque eget fusce tincidunt aptent Parturient
                    sagittis. Urna nunc habitasse, nisl rutrum conubia nunc donec urna.</p>

                <p>Mi faucibus Vestibulum sagittis amet conubia Lorem elementum amet pellentesque. Non hendrerit
                    vulputate ut. In dictumst vestibulum nibh. Amet parturient penatibus pede eros. Fringilla facilisis
                    eu orci. Primis. Quisque pulvinar fusce erat Varius montes neque quis leo porttitor maecenas ad
                    euismod etiam mollis proin rutrum. Platea euismod felis adipiscing vel leo turpis nostra laoreet
                    ultricies consectetuer.</p>

                <p>Pede nonummy. Erat vulputate scelerisque, euismod hymenaeos vestibulum turpis maecenas. Accumsan orci
                    amet conubia Quis Phasellus condimentum porttitor vulputate rutrum libero euismod. Et est. Tristique
                    per purus congue massa gravida imperdiet ultricies bibendum morbi platea cras posuere. Hymenaeos
                    auctor ipsum purus at morbi, arcu habitasse libero. Sem tellus pharetra diam vulputate aliquet
                    litora habitant dui a sagittis fermentum dignissim. Ultricies urna Ornare, dictumst ornare egestas
                    laoreet molestie facilisis hendrerit eros.</p>

                <p>Dis litora lacinia blandit interdum bibendum etiam blandit, in purus vestibulum sem rhoncus ultrices
                    a, dignissim hymenaeos nibh eros lobortis eu congue, amet. Aliquam dapibus ridiculus. Etiam.
                    Cubilia. Dolor enim phasellus habitasse tortor. Magnis curae; rutrum quam integer nullam congue
                    dignissim potenti. Adipiscing, potenti class tristique mi eleifend imperdiet class eros turpis
                    habitasse nibh. Justo turpis. Ipsum. Nam metus. Sodales senectus magnis. Sem risus. Sollicitudin
                    semper gravida enim. Tristique nisl, viverra cras tellus quam tincidunt. Egestas. Natoque enim
                    aptent. Pellentesque risus nibh porttitor maecenas conubia magna blandit.</p>

                <p>Sed. Suspendisse. Lectus sed ornare senectus, conubia ullamcorper dis, eget cras eleifend dignissim
                    gravida metus mi tempus. Curae; quam ad natoque lectus. Velit pharetra id mollis proin dis purus
                    lectus felis dignissim nunc posuere aptent sagittis. Sodales luctus feugiat sem fames felis nisi a.
                    Odio. Lacinia quam tortor duis. Aliquam. Non scelerisque aptent nam facilisis. Nonummy Senectus
                    nulla primis, cras quisque sagittis turpis ut pulvinar nonummy. Pede felis dictumst, tincidunt nisi,
                    massa in eu. Commodo nulla aenean at.</p>

                <p>Varius. Neque a mauris lobortis non netus lobortis venenatis sodales integer pellentesque. Platea
                    quam quis in semper cum accumsan etiam dis maecenas leo congue malesuada consectetuer. Et ante hac
                    suscipit cum quis semper velit proin urna a. Natoque enim. Sit. Pharetra rutrum ligula lacus tellus
                    tellus. Aliquam ut duis nisl. Aenean tempor eleifend.</p>

                <p>Accumsan tempor tristique egestas, iaculis integer condimentum ligula. Bibendum. Vel platea cras dui
                    facilisi viverra nulla purus suspendisse diam purus arcu dictumst nisl duis. Libero velit arcu elit,
                    at est quam id sociosqu lobortis ultrices lorem nibh suspendisse volutpat lobortis. Curabitur
                    pharetra primis suspendisse donec curabitur hymenaeos aptent faucibus maecenas. Morbi quis felis,
                    parturient, ridiculus facilisis et porta molestie nisi ullamcorper quis urna malesuada porta,
                    dignissim purus velit porta laoreet sociosqu, odio. Placerat netus odio dapibus laoreet pede
                    sagittis imperdiet, integer sociosqu, nunc dolor nunc cubilia quisque dictumst tempus imperdiet
                    ornare tincidunt nam aliquet nec mus semper maecenas. Accumsan.</p>

                <p>Dis dui inceptos sociosqu, id metus netus massa. Fames nibh augue, dui integer nunc sed orci ante
                    commodo vitae velit magna vitae, ante posuere vitae adipiscing lorem, blandit eu vehicula commodo
                    suscipit, maecenas sem per parturient nibh aptent Nulla. Sociis ipsum volutpat egestas curae;.
                    Aliquet. At tempus netus malesuada dis torquent. Eget.</p>

                <p>Felis etiam arcu dignissim nullam. Viverra euismod cras. Odio. Nisi, sociosqu penatibus ridiculus
                    euismod tristique vel ultrices facilisi in lacinia. Metus tristique vehicula parturient vivamus
                    velit cras sit hac imperdiet lorem lacus elementum fusce Primis dui nec dictum gravida. Luctus
                    ornare lacus libero tincidunt morbi. Tristique, natoque tempus viverra et hendrerit justo venenatis
                    neque iaculis. Ultricies habitant. Facilisis diam potenti nisl libero tempor bibendum. Nisl nulla
                    cubilia suscipit convallis. Gravida dolor curae; netus rhoncus.</p>

                <p>Ultricies hendrerit auctor nec viverra non proin aliquet luctus est dictum sagittis, tellus aliquam
                    Tincidunt fusce iaculis pellentesque sodales platea sapien nonummy potenti senectus ultricies mattis
                    est nostra donec accumsan fames ridiculus habitasse quam metus ridiculus, blandit nullam ad nunc.
                    Urna arcu nostra. Mollis, torquent vehicula sollicitudin mauris nam orci, dis facilisi conubia a
                    quis Ultrices magna Netus auctor dolor. Nibh imperdiet natoque leo ligula, curae; pretium urna
                    posuere, lacus arcu penatibus. Non fermentum fringilla vehicula.</p>

                <p>Ac dolor. Lacinia primis venenatis mattis. Consequat congue semper ridiculus. Dictumst ligula quam.
                    Arcu rhoncus elit sapien arcu Mauris. Pellentesque conubia sapien ipsum tellus viverra nisl
                    consequat. Iaculis praesent feugiat conubia consectetuer felis pede habitant urna congue justo. Nisi
                    ad, vitae. Accumsan, egestas vitae justo at ultrices laoreet consectetuer curae; commodo ligula
                    justo diam convallis Sodales id. Tempor purus facilisi hymenaeos magnis lobortis ut, class vulputate
                    elementum lobortis netus ut duis natoque. Iaculis quis. Proin risus mattis class. Mi. Orci
                    consectetuer orci molestie class pellentesque mi. Conubia. Dictum.</p>
                <div class="nk-gap-4"></div>
            </div>
            <div class="col-lg-4">
                <!--
                    START: Sidebar

                    Additional Classes:
                        .nk-sidebar-left
                        .nk-sidebar-right
                        .nk-sidebar-sticky
                -->
                <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                    <div class="nk-gap-4"></div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Search</h4>
                        <div>
                            <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type something...">
                                    <button class="nk-btn nk-btn-lg link-effect-4"><span class="ion-search"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Categories</h4>
                        <div>
                            <ul class="nk-widget-categories">
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Live News</a>
                                </li>
                                <li>
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Tags</h4>
                        <div>
                            <div class="nk-widget-tags">
                                <a href="#">Creative</a>
                                <a href="#">Responsive</a>
                                <a href="#">Design</a>
                                <a href="#">Bootstrap</a>
                                <a href="#">Multi-Concept</a>
                            </div>
                        </div>
                    </div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Recent Posts</h4>
                        <div>

                            <div class="nk-widget-post">
                                <a href="news-single-image.php" class="nk-image-box-1 nk-post-image">
                                    <img src="assets/images/post-1-sm.jpg" alt="">
                                </a>
                                <h3 class="nk-post-title"><a href="news-single-image.php">Image Blog Post</a></h3>
                                <div class="nk-post-meta-date">September 18, 2016</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="news-single-video.php" class="nk-image-box-1 nk-post-image">
                                    <img src="assets/images/post-2-sm.jpg" alt="">
                                </a>
                                <h3 class="nk-post-title"><a href="news-single-video.php">Video Blog Post</a></h3>
                                <div class="nk-post-meta-date">September 5, 2016</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="news-single-quote.php" class="nk-image-box-1 nk-post-image">
                                    <img src="assets/images/post-3-sm.jpg" alt="">
                                </a>
                                <h3 class="nk-post-title"><a href="news-single-quote.php">Blockquote Blog Post</a></h3>
                                <div class="nk-post-meta-date">August 27, 2016</div>
                            </div>

                        </div>
                    </div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Popular Products</h4>
                        <div>

                            <div class="nk-widget-post">
                                <a href="store-product.php" class="nk-post-image">
                                    <img src="assets/images/product-1-sm.png" alt="Women Tshirt">
                                </a>
                                <h3 class="nk-post-title"><a href="store-product.php">Women Tshirt</a></h3>

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

                                <div class="nk-product-price">$67.00</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="store-product.php" class="nk-post-image">
                                    <img src="assets/images/product-2-sm.png" alt="Men Tshirt">
                                </a>
                                <h3 class="nk-post-title"><a href="store-product.php">Men Tshirt</a></h3>

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

                                <div class="nk-product-price">$67.00</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="store-product.php" class="nk-post-image">
                                    <img src="assets/images/product-3-sm.png" alt="Women Hoodie">
                                </a>
                                <h3 class="nk-post-title"><a href="store-product.php">Women Hoodie</a></h3>

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

                                <div class="nk-product-price">$125.00</div>
                            </div>

                        </div>
                    </div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Instagram</h4>
                        <div>
                            <div class="nk-instagram row sm-gap vertical-gap"></div>
                        </div>
                    </div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Our Twitter</h4>
                        <div>
                            <div class="nk-twitter-list" data-twitter-count="2"></div>
                        </div>
                    </div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Facebook</h4>
                        <div>
                            <div class="fb-page" data-href="http://www.facebook.com/kinfolkmag" data-width="700"
                                 data-height="350" data-small-header="false" data-adapt-container-width="true"
                                 data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
                        </div>
                    </div>
                    <div class="nk-gap-4"></div>

                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>

    <div class="nk-gap-3"></div>


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
        <?php include 'include/cart.php'; ?>
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
