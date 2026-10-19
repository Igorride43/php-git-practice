<?php

function calculateDiscount(float $price, float $percent): float
{
    return $price - ($price * $percent / 100);
}