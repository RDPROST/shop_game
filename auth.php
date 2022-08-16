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
                    <?php

                    if (isset($_SESSION['steamid'])) {
                        echo "<form action='' method='get'><button name='logout' type='submit' class='nk-btn nk-btn-color-white link-effect-4' style='width: 100%'>Log In Steam</button></form>";
                    } else {
                        echo "<a href='?login' class='nk-btn nk-btn-color-white link-effect-4' style='width: 100%'>Log In Steam</a>";
                    }
                    ?>
                    <div class="clearfix"></div>
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
<!-- END: Scripts -->
