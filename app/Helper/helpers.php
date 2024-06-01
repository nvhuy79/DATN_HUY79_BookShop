<?php

if (!function_exists('calculateDiscountPercentage')) {
    function calculateDiscountPercentage($originalPrice, $salePrice) {
        if ($originalPrice == 0) {
            return 0;
        }
        return round((($originalPrice - $salePrice) / $originalPrice) * 100);
    }
}
