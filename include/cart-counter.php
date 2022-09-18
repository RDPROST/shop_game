<?php
$total_count = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $total_count += $value['quantity'];
    }
    $_SESSION['cart_total'] = $total_count;
} else {
    $_SESSION['cart_total'] = 0;
    $_SESSION['cart'] = array();
}
?>
<li class="single-icon">
    <a href="#" class="nk-cart-toggle no-link-effect">
        <span class="nk-icon-toggle">
            <span class="nk-icon-toggle-front">
                <span class="ion-android-cart"></span>
                <span class="nk-badge"><?php echo $_SESSION['cart_total'];?></span>
            </span>
            <span class="nk-icon-toggle-back">
                <span class="nk-icon-close"></span>
            </span>
        </span>
    </a>
</li>
