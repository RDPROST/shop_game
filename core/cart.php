<?php
session_start();
$total_count = 0;

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'add') {
        if (isset($_SESSION['cart'][$_POST['id']])) {
            $_SESSION['cart'][$_POST['id']]['quantity']++;
        } else {
            $_SESSION['cart'][$_POST['id']] = array(
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'images' => $_POST['images'],
                'quantity' => 1
            );
        }
        foreach ($_SESSION['cart'] as $key => $value) {
            $total_count += $value['quantity'];
        }
        $_SESSION['cart_total'] = $total_count;
    }
}

