<?php
    include 'testapi.php';
    session_start();

    $cart = $_SESSION['cart'];
    $name = $cart->getMenber()->getName();

    echo "Page2: {$name}<br>";
    $list = $cart->getBuylist();
    foreach ($list as $k=>$v){
        echo "{$k} : {$v}<br>";
    }