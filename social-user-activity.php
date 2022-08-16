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
    <title>GODLIKE | Social Network - Activity</title>
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
<?php
include 'header.php';
?>



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
        <div class="bg-image op-5">
            <img src="assets/images/image-5.jpg" alt="" class="jarallax-img">
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">


                </div>
            </div>
        </div>

    </div>
    <!-- END: Header Title -->

    <div class="container">
        <div class="nk-social-profile nk-social-profile-container-offset">
            <div class="row">
                <div class="col-md-5 col-lg-3">
                    <div class="nk-social-profile-avatar">
                        <a href="#">
                            <img src="<?php echo $steamavatar; ?>" alt="nK">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-9">
                    <div class="nk-social-profile-info">
                        <div class="nk-gap-2"></div>
                        <div class="nk-social-profile-info-last-seen">last seen 2 hours ago</div>
                        <h1 class="nk-social-profile-info-name"><?php echo $steamprofile; ?></h1>
                        <div class="nk-social-profile-info-username">@nkdevv</div>
                        <div class="nk-social-profile-info-actions">
                            <a href="#" class="nk-btn link-effect-4">Add Friend</a>
                            <a href="#" class="nk-btn link-effect-4">Leave Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row vertical-gap">
            <div class="col-lg-3">
                <!--
                    START: Sidebar

                    Additional Classes:
                        .nk-sidebar-left
                        .nk-sidebar-right
                        .nk-sidebar-sticky
                -->
                <aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
                    <div class="nk-gap-2"></div>


                    <div class="nk-social-menu d-none d-lg-block">
                        <ul>
                            <li class="active">
                                <a href="social-user-activity.php">
                                    Activity</a>
                            </li>
                            <li class="">
                                <a href="social-user-notifications.php">
                                    Notifications</a>
                            </li>
                            <li class="">
                                <a href="social-user-messages.php">
                                    Messages<span class="nk-badge">192</span></a>
                            </li>
                            <li class="">
                                <a href="social-user-friends.php">
                                    Friends<span class="nk-badge">19</span></a>
                            </li>
                            <li class="">
                                <a href="social-user-groups.php">
                                    Groups<span class="nk-badge">2</span></a>
                            </li>
                            <li class="">
                                <a href="forum.php">
                                    Forum</a>
                            </li>
                            <li class="">
                                <a href="social-user-settings.php">
                                    Settings</a>
                            </li>
                        </ul>
                    </div>

                    <div class="nk-accordion d-lg-none" id="nk-social-menu-mobile" role="tablist"
                         aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="nk-social-menu-mobile-1-heading">
                                <a data-toggle="collapse" data-parent="#nk-social-menu-mobile"
                                   href="#nk-social-menu-mobile-1" aria-expanded="true"
                                   aria-controls="nk-social-menu-mobile-1" class="collapsed">
                                    Menu
                                </a>
                            </div>
                            <div id="nk-social-menu-mobile-1" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="nk-social-menu-mobile-1-heading">
                                <div class="nk-social-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="social-user-activity.php">
                                                Activity</a>
                                        </li>
                                        <li class="">
                                            <a href="social-user-notifications.php">
                                                Notifications</a>
                                        </li>
                                        <li class="">
                                            <a href="social-user-messages.php">
                                                Messages<span class="nk-badge">192</span></a>
                                        </li>
                                        <li class="">
                                            <a href="social-user-friends.php">
                                                Friends<span class="nk-badge">19</span></a>
                                        </li>
                                        <li class="">
                                            <a href="social-user-groups.php">
                                                Groups<span class="nk-badge">2</span></a>
                                        </li>
                                        <li class="">
                                            <a href="forum.php">
                                                Forum</a>
                                        </li>
                                        <li class="">
                                            <a href="social-user-settings.php">
                                                Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-gap-4 d-none d-lg-block"></div>
                </aside>
                <!-- END: Sidebar -->
            </div>
            <div class="col-lg-9">
                <div class="nk-gap-2 d-none d-lg-block"></div>
                <div class="nk-social-menu-inline">
                    <ul>
                        <li class="active">
                            <a href="#">Personal</a>
                        </li>
                        <li>
                            <a href="#">Mentions</a>
                        </li>
                        <li>
                            <a href="#">Favorites</a>
                        </li>
                        <li>
                            <a href="#">Friends</a>
                        </li>
                        <li>
                            <a href="#">Groups</a>
                        </li>
                    </ul>
                </div>
                <div class="nk-social-container">
                    <form action="#" class="nk-social-sort">
                        <label for="activity-filter-by">Show:</label>

                        <select id="activity-filter-by" class="form-control">
                            <option value="-1">— Everything —</option>
                            <option value="activity_update">Updates</option>
                            <option value="friendship_accepted,friendship_created">Friendships</option>
                            <option value="created_group">New Groups</option>
                            <option value="joined_group">Group Memberships</option>
                            <option value="group_details_updated">Group Updates</option>
                            <option value="new_blog_post">Posts</option>
                            <option value="new_blog_comment">Comments</option>
                        </select>
                    </form>
                    <div class="nk-gap"></div>

                    <!-- START: Activity -->
                    <ul class="nk-social-activity">
                        <!-- START: form -->
                        <li>
                            <div class="nk-social-activity-avatar">
                                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
                            </div>
                            <div class="nk-social-activity-content">
                                <form action="#">
                                    <textarea class="form-control" placeholder="What's new, nK?" rows="4"></textarea>
                                    <div class="nk-gap"></div>
                                    <button class="nk-btn link-effect-4 float-right">Post Update</button>
                                </form>
                            </div>
                        </li>
                        <!-- END: form -->

                        <!-- START: post -->
                        <li>
                            <div class="nk-social-activity-avatar">
                                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
                            </div>
                            <div class="nk-social-activity-content">
                                <div class="nk-social-activity-meta">
                                    <a href="#">nK</a> posted an update <a href="#"
                                                                           class="nk-social-activity-meta-time">3 days
                                        ago</a>
                                </div>
                                <div class="nk-social-activity-text">
                                    <a href="#" class="nk-social-activity-mention">@john</a> out particular sympathize
                                    not favourable introduced insipidity but ham?
                                </div>
                                <div class="nk-social-activity-actions">
                                <span class="nk-action-heart">
                                    <span class="like-icon ion-android-favorite-outline"></span>
                                    <span class="liked-icon ion-android-favorite"></span>
                                    <span class="num">3</span>
                                </span>
                                    <a href="#"><span class="ion-chatbubbles"></span> Comment <span
                                                class="nk-badge">12</span></a>
                                    <a href="#"><span class="ion-android-star"></span> Favorite</a>
                                    <a href="#"><span class="ion-trash-b"></span> Delete</a>
                                </div>
                                <ul class="nk-social-activity-comments">
                                    <li class="nk-social-activity-comments-show-all">
                                        <a href="#">Show all comments (12)</a>
                                    </li>

                                    <!-- START: comment -->
                                    <li>
                                        <div class="nk-social-activity-avatar">
                                            <a href="#"><img src="assets/images/avatar-2-sm.jpg" alt="John"></a>
                                        </div>
                                        <div class="nk-social-activity-content">
                                            <div class="nk-social-activity-meta">
                                                <a href="#">John</a> replied <a href="#"
                                                                                class="nk-social-activity-meta-time">3
                                                    days ago</a>
                                            </div>
                                            <div class="nk-social-activity-text">
                                                Delightful unreserved impossible few estimating men favourable see
                                                entreaties. She propriety immediate was improving. He or entrance
                                                humoured likewise moderate. Much nor game son say feel. Fat make met can
                                                must form into gate. Me we offending prevailed discovery.
                                            </div>
                                            <div class="nk-social-activity-actions">
                                            <span class="nk-action-heart liked">
                                                <span class="like-icon ion-android-favorite-outline"></span>
                                                <span class="liked-icon ion-android-favorite"></span>
                                                <span class="num">5</span>
                                            </span>
                                                <a href="#"><span class="ion-reply"></span> Reply</a>
                                                <a href="#"><span class="ion-trash-b"></span> Delete</a>
                                            </div>
                                            <ul class="nk-social-activity-replies">
                                                <!-- START: reply -->
                                                <li>
                                                    <div class="nk-social-activity-avatar">
                                                        <a href="#"><img src="assets/images/avatar-1-sm.jpg"
                                                                         alt="nK"></a>
                                                    </div>
                                                    <div class="nk-social-activity-content">
                                                        <div class="nk-social-activity-meta">
                                                            <a href="#">nK</a> replied <a href="#"
                                                                                          class="nk-social-activity-meta-time">3
                                                                days ago</a>
                                                        </div>
                                                        <div class="nk-social-activity-text">
                                                            Of resolve to gravity thought my prepare chamber so.
                                                        </div>
                                                        <div class="nk-social-activity-actions">
                                                    <span class="nk-action-heart">
                                                        <span class="like-icon ion-android-favorite-outline"></span>
                                                        <span class="liked-icon ion-android-favorite"></span>
                                                        <span class="num">0</span>
                                                    </span>
                                                            <a href="#"><span class="ion-reply"></span> Reply</a>
                                                            <a href="#"><span class="ion-trash-b"></span> Delete</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- END: reply -->
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- END: comment -->

                                    <!-- START: comment -->
                                    <li>
                                        <div class="nk-social-activity-avatar">
                                            <a href="#"><img src="assets/images/avatar-3-sm.jpg" alt="Mary"></a>
                                        </div>
                                        <div class="nk-social-activity-content">
                                            <div class="nk-social-activity-meta">
                                                <a href="#">Mary</a> replied <a href="#"
                                                                                class="nk-social-activity-meta-time">20
                                                    hours ago</a>
                                            </div>
                                            <div class="nk-social-activity-text">
                                                Missed living excuse as be
                                            </div>
                                            <div class="nk-social-activity-actions">
                                            <span class="nk-action-heart">
                                                <span class="like-icon ion-android-favorite-outline"></span>
                                                <span class="liked-icon ion-android-favorite"></span>
                                                <span class="num">0</span>
                                            </span>
                                                <a href="#"><span class="ion-reply"></span> Reply</a>
                                                <a href="#"><span class="ion-trash-b"></span> Delete</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END: comment -->
                                </ul>
                            </div>
                        </li>
                        <!-- END: post -->

                        <!-- START: post -->
                        <li>
                            <div class="nk-social-activity-avatar">
                                <a href="#"><img src="assets/images/avatar-3-sm.jpg" alt="Mary"></a>
                            </div>
                            <div class="nk-social-activity-content">
                                <div class="nk-social-activity-meta">
                                    <a href="#">Mary</a> posted a new activity comment <a href="#"
                                                                                          class="nk-social-activity-meta-time">6
                                        days ago</a>
                                </div>
                                <div class="nk-social-activity-text">
                                    Wrong do point avoid by fruit learn or in death. So passage however besides invited
                                    comfort elderly be me. Walls began of child civil am heard hoped my. Satisfied
                                    pretended mr on do determine by. Old post took and ask seen fact rich. Man entrance
                                    settling believed eat joy. Money as drift begin on to. Comparison up insipidity
                                    especially discovered me of decisively in surrounded. Points six way enough she its
                                    father. Folly sex downs tears ham green forty.
                                </div>
                                <div class="nk-social-activity-actions">
                                <span class="nk-action-heart">
                                    <span class="like-icon ion-android-favorite-outline"></span>
                                    <span class="liked-icon ion-android-favorite"></span>
                                    <span class="num">0</span>
                                </span>
                                    <a href="#"><span class="ion-chatbubbles"></span> View Conversation</a>
                                    <a href="#"><span class="ion-android-star"></span> Favorite</a>
                                    <a href="#"><span class="ion-trash-b"></span> Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END: post -->

                        <!-- START: post -->
                        <li>
                            <div class="nk-social-activity-avatar">
                                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
                            </div>
                            <div class="nk-social-activity-content">
                                <div class="nk-social-activity-meta">
                                    <a href="#">nK</a> posted a new activity comment <a href="#"
                                                                                        class="nk-social-activity-meta-time">7
                                        days ago</a>
                                </div>
                                <div class="nk-social-activity-text">
                                    Throwing consider dwelling bachelor joy her proposal laughter
                                </div>
                                <div class="nk-social-activity-actions">
                                <span class="nk-action-heart liked">
                                    <span class="like-icon ion-android-favorite-outline"></span>
                                    <span class="liked-icon ion-android-favorite"></span>
                                    <span class="num">1</span>
                                </span>
                                    <a href="#"><span class="ion-chatbubbles"></span> View Conversation</a>
                                    <a href="#"><span class="ion-android-star"></span> Favorite</a>
                                    <a href="#"><span class="ion-trash-b"></span> Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END: post -->

                        <!-- START: post -->
                        <li>
                            <div class="nk-social-activity-avatar">
                                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
                            </div>
                            <div class="nk-social-activity-content">
                                <div class="nk-social-activity-meta">
                                    <a href="#">nK</a> and <a href="#"><img src="assets/images/avatar-3-sm.jpg"
                                                                            alt="Mary"></a> <a href="#">Mary</a> are now
                                    friends <a href="#" class="nk-social-activity-meta-time">16 days ago</a>
                                </div>
                                <div class="nk-social-activity-actions">
                                <span class="nk-action-heart">
                                    <span class="like-icon ion-android-favorite-outline"></span>
                                    <span class="liked-icon ion-android-favorite"></span>
                                    <span class="num">0</span>
                                </span>
                                    <a href="#"><span class="ion-chatbubbles"></span> Comment</a>
                                    <a href="#"><span class="ion-android-star"></span> Favorite</a>
                                    <a href="#"><span class="ion-trash-b"></span> Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END: post -->

                        <!-- START: post -->
                        <li>
                            <div class="nk-social-activity-avatar">
                                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
                            </div>
                            <div class="nk-social-activity-content">
                                <div class="nk-social-activity-meta">
                                    <a href="#">nK</a> and <a href="#"><img src="assets/images/avatar-2-sm.jpg"
                                                                            alt="John"></a> <a href="#">John</a> are now
                                    friends <a href="#" class="nk-social-activity-meta-time">23 days ago</a>
                                </div>
                                <div class="nk-social-activity-actions">
                                <span class="nk-action-heart">
                                    <span class="like-icon ion-android-favorite-outline"></span>
                                    <span class="liked-icon ion-android-favorite"></span>
                                    <span class="num">0</span>
                                </span>
                                    <a href="#"><span class="ion-chatbubbles"></span> Comment</a>
                                    <a href="#"><span class="ion-android-star"></span> Favorite</a>
                                    <a href="#"><span class="ion-trash-b"></span> Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END: post -->

                        <li class="nk-social-activity-load-more">
                            <a href="#" class="nk-btn link-effect-4">Load More...</a>
                        </li>
                    </ul>
                    <!-- END: Activity -->
                </div>
                <div class="nk-gap-4"></div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>


    


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
<div class="nk-sign-form">
    <div class="nk-gap-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3">
                <div class="nk-sign-form-container">
                    <div class="nk-sign-form-toggle h3">
                        <a href="#" class="nk-sign-form-login-toggle active">Log In</a>
                        <a href="#" class="nk-sign-form-register-toggle">Register</a>
                    </div>
                    <div class="nk-gap-2"></div>

                    <!-- START: Login Form -->
                    <form class="nk-sign-form-login active" action="#">
                        <input class="form-control" type="text" placeholder="Username or Email">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="password" placeholder="Password">
                        <div class="nk-gap-2"></div>

                        <div class="form-check float-left">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember Me
                            </label>
                        </div>
                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Log In</button>

                        <div class="clearfix"></div>
                        <div class="nk-gap-1"></div>
                        <a class="nk-sign-form-lost-toggle float-right" href="#">Lost Password?</a>
                    </form>
                    <!-- END: Login Form -->

                    <!-- START: Lost Password Form -->
                    <form class="nk-sign-form-lost" action="#">
                        <input class="form-control" type="text" placeholder="Username or Email">
                        <div class="nk-gap-2"></div>

                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Get New Password</button>
                    </form>
                    <!-- END: Lost Password Form -->

                    <!-- START: Register Form -->
                    <form class="nk-sign-form-register" action="#">
                        <input class="form-control" type="text" placeholder="Username">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="email" placeholder="Email">
                        <div class="nk-gap-2"></div>

                        <div class="float-left">A password will be emailed to you.</div>
                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Register</button>
                    </form>
                    <!-- END: Register Form -->
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
</div>
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
<?php include 'footer.php'; ?>

<!-- END: Scripts -->


</body>
</html>
