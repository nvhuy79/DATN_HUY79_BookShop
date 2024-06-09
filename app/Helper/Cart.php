<?php



namespace App\Helper;

class Cart
{
    public static function getTotal($carts)
    {
        $totalPrice = 0;
        foreach ($carts as $cart) {
            $totalPrice += $cart->price * $cart->quantity;
        }
        return $totalPrice;
    }
}
