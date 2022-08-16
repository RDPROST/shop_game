<div class="nk-sign-form">
    <div class="nk-gap-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3">
                <div class="nk-sign-form-container">
                    <div class="nk-sign-form-toggle h3">
                        <?php
                            if (isset($_SESSION['steamid'])) {
                                echo '<a href="#" class="nk-sign-form-login-toggle active">Log Out</a>';
                            } else {
                                echo '<a href="#" class="nk-sign-form-login-toggle active">Log In</a>';
                            }
                        ?>

                    </div>
                    <div class="nk-gap-2"></div>
                    <?php

                    if (isset($_SESSION['steamid'])) {
                        echo "<form action='' method='get'><button name='logout' type='submit' class='nk-btn nk-btn-color-white link-effect-4' style='width: 100%'>Log Out Steam</button></form>";
                    } else {
                        echo "<a href='?login' class='nk-btn nk-btn-color-white link-effect-4' style='width: 100%'>Log In Steam</a>";
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
</div>
