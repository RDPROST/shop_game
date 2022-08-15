<?php
require 'steamauth/steamauth.php';
require 'steamauth/userInfo.php';

if(isset($_SESSION['steamid'])) {
    $steamid = $_SESSION['steamid'];
    $steamprofile = $_SESSION['steam_personaname'];
    $steamavatar = $_SESSION['steam_avatarfull'];
    $steam_profile = "http://steamcommunity.com/profiles/".$steamid;
} else {
    $steamid = "";
    $steamprofile = "";
    $steamavatar = "";
    $steam_profile = "";
    loginbutton();
}
?>
<!-- START: Page Preloader -->
<div class="nk-preloader">
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
<div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/images/page-background.jpg');"></div>
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
<div class="nk-page-background-audio d-none" data-audio="assets/mp3/purpleplanetmusic-desolation.mp3" data-audio-volume="100" data-audio-autoplay="true" data-audio-loop="true" data-audio-pause-on-page-leave="true"></div>
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
                        <li><a href="https://twitter.com/nkdevv" target="_blank"><span class="ion-social-twitter"></span></a></li>
                        <li><a href="https://dribbble.com/_nK" target="_blank"><span class="ion-social-dribbble-outline"></span></a></li>
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

                <a href="/" class="nk-nav-logo">
                    <img src="assets/images/logo.svg" alt="" width="90">
                </a>


                <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                    <li class="active  nk-drop-item">
                        <a href="/">
                            Home</a><ul class="dropdown">
                            <li class="active  ">
                                <a href="/">
                                    Landing</a>
                            </li><li class="  ">
                                <a href="index-main.html">
                                    Main</a>
                            </li><li class="  ">
                                <a href="index-game-promo.html">
                                    Game Promo</a>
                            </li>
                        </ul>
                    </li><li class="  nk-drop-item">
                        <a href="page-contact.html">
                            Features</a><ul class="dropdown">
                            <li class="  nk-drop-item">
                                <a href="page-contact.html">
                                    Pages</a><ul class="dropdown">
                                    <li class="  ">
                                        <a href="forum.html">
                                            Forum</a>
                                    </li><li class="  ">
                                        <a href="page-contact.html">
                                            Contact</a>
                                    </li><li class="  ">
                                        <a href="page-coming-soon.html">
                                            Coming Soon</a>
                                    </li><li class="  ">
                                        <a href="page-404.html">
                                            404</a>
                                    </li><li class="  ">
                                        <a href="page-age-check.html">
                                            Age Check</a>
                                    </li>
                                </ul>
                            </li><li class="  nk-drop-item">
                                <a href="layout-nav-default.html">
                                    Navigations</a><ul class="dropdown">
                                    <li class="  ">
                                        <a href="layout-nav-default.html">
                                            Default</a>
                                    </li><li class="  ">
                                        <a href="layout-nav-default-transparent.html">
                                            Default Transparent</a>
                                    </li><li class="  ">
                                        <a href="layout-nav-main-top.html">
                                            Main Top Only</a>
                                    </li><li class="  ">
                                        <a href="layout-nav-main-side.html">
                                            Main Side</a>
                                    </li><li class="  ">
                                        <a href="layout-nav-main-top-fullscreen.html">
                                            Main Top + Fullscreen</a>
                                    </li><li class="  ">
                                        <a href="layout-nav-fullscreen-side.html">
                                            Fullscreen + Side</a>
                                    </li>
                                </ul>
                            </li><li class="  nk-drop-item">
                                <a href="layout-page-header.html">
                                    Headers</a><ul class="dropdown">
                                    <li class="  ">
                                        <a href="layout-header.html">
                                            Size Default</a>
                                    </li><li class="  ">
                                        <a href="layout-header-sm.html">
                                            Size Small</a>
                                    </li><li class="  ">
                                        <a href="layout-header-md.html">
                                            Size Mid</a>
                                    </li><li class="  ">
                                        <a href="layout-header-lg.html">
                                            Size Large</a>
                                    </li><li class="  ">
                                        <a href="layout-header-full.html">
                                            Size Full</a>
                                    </li><li class="  ">
                                        <a href="layout-header-video.html">
                                            Video</a>
                                    </li><li class="  ">
                                        <a href="layout-header-video-plain.html">
                                            Video Plain</a>
                                    </li><li class="  ">
                                        <a href="layout-header-no.html">
                                            NO Header</a>
                                    </li>
                                </ul>
                            </li><li class="  ">
                                <a href="widgets.html">
                                    Widgets</a>
                            </li><li class="  ">
                                <a href="https://nkdev.info/docs/godlike-html/">
                                    Documentation</a>
                            </li>
                        </ul>
                    </li><li class=" nk-mega-item nk-drop-item">
                        <a href="#">
                            Elements</a><div class="dropdown"><div class="bg-image">
                                <img src="assets/images/bg-menu.jpg" alt="" class="jarallax-img">
                            </div><ul>


                                <li>

                                    <ul>
                                        <li class="  ">
                                            <a href="element-carousels.html">
                                                Carousels</a>
                                        </li><li class="  ">
                                            <a href="element-image-boxes.html">
                                                Image Boxes</a>
                                        </li><li class="  ">
                                            <a href="element-icon-boxes.html">
                                                Icon Boxes</a>
                                        </li><li class="  ">
                                            <a href="element-counters.html">
                                                Counters</a>
                                        </li><li class="  ">
                                            <a href="element-blockquotes.html">
                                                Block Quotes</a>
                                        </li><li class="  ">
                                            <a href="element-testimonials.html">
                                                Testimonials</a>
                                        </li><li class="  ">
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
                                        </li><li class="  ">
                                            <a href="element-gif.html">
                                                Gif Animations</a>
                                        </li><li class="  ">
                                            <a href="element-forms.html">
                                                AJAX Forms</a>
                                        </li><li class="  ">
                                            <a href="element-countdown.html">
                                                Countdown</a>
                                        </li><li class="  ">
                                            <a href="element-text-typed.html">
                                                Typed Text</a>
                                        </li><li class="  ">
                                            <a href="element-tabs.html">
                                                Tabs</a>
                                        </li><li class="  ">
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
                                        </li><li class="  ">
                                            <a href="element-call-to-action.html">
                                                Call to Action Blocks</a>
                                        </li><li class="  ">
                                            <a href="element-progress.html">
                                                Progress Bars</a>
                                        </li><li class="  ">
                                            <a href="element-pagination.html">
                                                Pagination</a>
                                        </li><li class="  ">
                                            <a href="element-pricing-tables.html">
                                                Pricing Tables</a>
                                        </li><li class="  ">
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
                                        </li><li class="  ">
                                            <a href="element-titles.html">
                                                Titles [headings]</a>
                                        </li><li class="  ">
                                            <a href="element-dropcaps.html">
                                                Dropcaps</a>
                                        </li><li class="  ">
                                            <a href="element-colors.html">
                                                Colors</a>
                                        </li><li class="  ">
                                            <a href="element-buttons.html">
                                                Buttons</a>
                                        </li><li class="  ">
                                            <a href="element-breadcrumbs.html">
                                                Breadcrumbs</a>
                                        </li>
                                    </ul>

                                </li>


                            </ul>
                        </div>
                    </li><li class="  nk-drop-item">
                        <a href="news-list.html">
                            News</a><ul class="dropdown">
                            <li class="  ">
                                <a href="news-list.html">
                                    List</a>
                            </li><li class="  ">
                                <a href="news-list-classic.html">
                                    Classic List</a>
                            </li><li class="  ">
                                <a href="news-grid-2.html">
                                    Grid 2 Columns</a>
                            </li><li class="  ">
                                <a href="news-grid-3.html">
                                    Grid 3 Columns</a>
                            </li><li class="  nk-drop-item">
                                <a href="news-single-image.html">
                                    Single Post</a><ul class="dropdown">
                                    <li class="  ">
                                        <a href="news-single-image.html">
                                            Single Image</a>
                                    </li><li class="  ">
                                        <a href="news-single-video.html">
                                            Single Video</a>
                                    </li><li class="  ">
                                        <a href="news-single-audio.html">
                                            Single Audio</a>
                                    </li><li class="  ">
                                        <a href="news-single-gallery.html">
                                            Single Gallery</a>
                                    </li><li class="  ">
                                        <a href="news-single-quote.html">
                                            Single Block Quote</a>
                                    </li><li class="  ">
                                        <a href="news-single-standard.html">
                                            Single Standard</a>
                                    </li><li class="  ">
                                        <a href="news-single-big-content.html">
                                            Single Big Content Example</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li><li class="  nk-drop-item">
                        <a href="/init/social-user-activity.php">
                            Social</a><ul class="dropdown">
                            <li class="  nk-drop-item">
                                <a href="/init/social-user-activity.php">
                                    User</a><ul class="dropdown">
                                    <li class="  ">
                                        <a href="/init/social-user-activity.php">
                                            Activity</a>
                                    </li><li class="  ">
                                        <a href="social-user-notifications.html">
                                            Notifications</a>
                                    </li><li class="  ">
                                        <a href="social-user-messages.html">
                                            Messages</a>
                                    </li><li class="  ">
                                        <a href="social-user-messages-single.html">
                                            Messages Single</a>
                                    </li><li class="  ">
                                        <a href="social-user-messages-compose.html">
                                            Messages Compose</a>
                                    </li><li class="  ">
                                        <a href="social-user-friends.html">
                                            Friends</a>
                                    </li><li class="  ">
                                        <a href="social-user-settings.html">
                                            Settings</a>
                                    </li><li class="  ">
                                        <a href="social-user-settings-email.html">
                                            Settings Email</a>
                                    </li>
                                </ul>
                            </li><li class="  nk-drop-item">
                                <a href="social-group-activity.html">
                                    Group</a><ul class="dropdown">
                                    <li class="  ">
                                        <a href="social-group-activity.html">
                                            Activity</a>
                                    </li><li class="  ">
                                        <a href="social-group-members.html">
                                            Members</a>
                                    </li><li class="  ">
                                        <a href="social-group-manage.html">
                                            Manage</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li><li class="  nk-drop-item">
                        <a href="store.html">
                            Store</a><ul class="dropdown">
                            <li class="  ">
                                <a href="store.html">
                                    Store</a>
                            </li><li class="  ">
                                <a href="store-product.html">
                                    Single Product</a>
                            </li><li class="  ">
                                <a href="store-cart.html">
                                    Cart</a>
                            </li><li class="  ">
                                <a href="store-checkout.html">
                                    Checkout</a>
                            </li><li class="  ">
                                <a href="store-account.html">
                                    Account</a>
                            </li>
                        </ul>
                    </li><li class="  nk-drop-item">
                        <a href="gallery.html">
                            Media</a><ul class="dropdown">
                            <li class="  ">
                                <a href="gallery.html">
                                    Gallery 1 Column</a>
                            </li><li class="  ">
                                <a href="gallery-2-col.html">
                                    Gallery 2 Columns</a>
                            </li><li class="  ">
                                <a href="gallery-3-col.html">
                                    Gallery 3 Columns</a>
                            </li><li class="  ">
                                <a href="videos.html">
                                    Videos 1 Column</a>
                            </li><li class="  ">
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

<nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content" id="nk-side">

    <div class="nk-navbar-bg">
        <div class="bg-image">
            <img src="assets/images/bg-nav-side.jpg" alt="" class="jarallax-img">
        </div>
    </div>


    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">

                <div class="nk-nav-row">
                    <a href="/" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="150">
                    </a>
                </div>

                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                    <ul class="nk-nav">
                        <li class=" ">
                            <a href="page-contact.html">
                                Contact</a>
                        </li><li class=" ">
                            <a href="page-coming-soon.html">
                                Coming Soon</a>
                        </li><li class=" ">
                            <a href="page-404.html">
                                404</a>
                        </li><li class=" ">
                            <a href="page-age-check.html">
                                Age Check</a>
                        </li><li class=" nk-drop-item">
                            <a href="#">
                                Sub Menu Example</a><ul class="dropdown">
                                <li class=" ">
                                    <a href="#1">
                                        Sub Item 1</a>
                                </li><li class=" nk-drop-item">
                                    <a href="#2">
                                        Sub Item 2</a><ul class="dropdown">
                                        <li class=" ">
                                            <a href="#1">
                                                Sub Item 1</a>
                                        </li><li class=" ">
                                            <a href="#2">
                                                Sub Item 2</a>
                                        </li>
                                    </ul>
                                </li><li class=" nk-drop-item">
                                    <a href="#3">
                                        Sub Item 3</a><ul class="dropdown">
                                        <li class=" ">
                                            <a href="#">
                                                Sub Item</a>
                                        </li>
                                    </ul>
                                </li><li class=" nk-drop-item">
                                    <a href="#4">
                                        Sub Item 4</a><ul class="dropdown">
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
                        &copy; 2018 nK Group Inc. Developed in association with LoremInc. IpsumCompany, SitAmmetGroup, CumSit and related logos are registered trademarks. All Rights Reserved.
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
            <a href="/" class="nk-nav-logo">
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