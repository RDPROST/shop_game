<?php
$total = 0;
$total_count = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $total_count += $value['quantity'];
        $total += $value['price'] * $value['quantity'];
    }
    $_SESSION['cart_total'] = $total_count;
} else {
    $_SESSION['cart_total'] = 0;
    $_SESSION['cart'] = array();
}
?>
<div class="nk-store nk-store-cart">
    <div class="table-responsive">
        <table class="table nk-store-cart-products">
            <tbody>
            <?php
            foreach ($_SESSION['cart'] as $key => $value) {
                ?>
                <tr>
                    <td class="nk-product-cart-thumb">
                        <a href="store-product.php" class="nk-post-image">
                            <img src="assets/images/product-2-sm.png" alt="Men Tshirt" class="nk-img">
                        </a>
                    </td>
                    <td class="nk-product-cart-title">
                        <h2 class="nk-post-title h5">
                            <a href="store-product.php"><?php echo $value['name'];?></a>
                        </h2>
                    </td>
                    <td class="nk-product-cart-price">$<?php echo $value['price'];?>.00</td>
                    <td class="nk-product-cart-quantity">
                        <?php echo $value['quantity'];?>
                    </td>
                    <td class="nk-product-cart-total">
                        &#8381;<?php echo $value['price'] * $value['quantity'];?>.00
                    </td>
                    <td class="nk-product-cart-remove"><a href="#"><span class="ion-trash-b"></span></a></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <div class="nk-gap-2"></div>
    <div class="nk-cart-total">
        Total <span>&#8381;<?php echo $total;?></span>
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
