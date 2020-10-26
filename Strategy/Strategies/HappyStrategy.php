<?php

namespace Strategy\Strategies;


use Strategy\Interfaces\BillingStrategy;

class HappyStrategy implements BillingStrategy{
    function getActPrice(float $price) : float {
        return $price * 0.5;
    }
}