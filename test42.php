<?php
    include 'testapi.php';
    session_start();            // 類似登入登出概念
//    echo $_SESSION['num'];

    $cart = $_SESSION['cart'];

    $name = $cart->getMenber()->getName();

    echo "Page2: {$name}<br>";
    $list = $cart->getBuylist();
    foreach ($list as $k=>$v){
        echo "{$k} : {$v}<br>";
    }

    //
    $cart->addItem('P087', 50);
    $cart->addItem('P065', 13);
    $cart->addItem('P023', 2);
    $cart->rmItem('P002');

?>
<a href="test43.php">Close</a>
