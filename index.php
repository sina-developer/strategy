<?php


require("./autoload.php");

use Strategy\Strategies\HappyStrategy;
use Strategy\Strategies\NormalStrategy;
use Strategy\CustomerBill;

$normal = new NormalStrategy();
$happy = new HappyStrategy();

$bills = new CustomerBill($normal);

$bills->add(100,2);
$bills->add(200,2);
$bills->add(100,1);

$bills->setStrategy($happy);

$bills->add(200,3);

$bills->print();