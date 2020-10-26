<?php

namespace Strategy;

use Strategy\Interfaces\BillingStrategy;

class CustomerBill{
    private array $bills = [];

    private BillingStrategy $strategy;

    public function __construct(BillingStrategy $strategy){
        $this->strategy = $strategy;
    }

    public function setStrategy(BillingStrategy $strategy){
        $this->strategy = $strategy;
    }

    public function add(float $price , int $quantity){
        $this->bills [] = $this->strategy->getActPrice($price * $quantity);
    }

    public function print(){
        $sum = 0;
        foreach ($this->bills as $key => $bill) {
            $sum += $bill;
        }
        echo "Total : $sum\n"; 
    }
}