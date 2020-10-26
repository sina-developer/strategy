<?php

namespace Strategy\Interfaces;

interface BillingStrategy{
    function getActPrice(float $price) : float;
}