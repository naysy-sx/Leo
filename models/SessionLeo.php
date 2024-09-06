<?php

namespace app\models;

class SessionLeo
{
    public function __construct()
    {
        if (!session_id()) {
            session_start();
        }
    }

    public function add($product_id, $product)
    {
        if (isset($product_id) && isset($product)) {
            if (isset($_SESSION['cart'][$product_id])) {
                $_SESSION['cart'][$product_id]['qty'] += 1;
            } else {
                $_SESSION['cart'][$product_id]        = $product;
                $_SESSION['cart'][$product_id]['qty'] = 1;
            }
        }
    }

    public function clear()
    {
        session_destroy();
    }
}