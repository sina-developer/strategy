<?php

namespace Strategy\Strategies;


use Strategy\Interfaces\BillingStrategy;

class NormalStrategy implements BillingStrategy{
    function getActPrice(float $price) : float {
        return $price;
    }
}