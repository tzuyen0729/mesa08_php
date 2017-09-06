<?php
    include 'testapi.php';
    session_start();

//    $lottery =rand(1,49);
//    $_SESSION['num'] = $lottery;
//    $lottery = 100;

    $menber = new Menber('001','haha',1);

    $cart = new Cart($menber);
    $_SESSION['cart'] = $cart;

    $cart->addItem('P001',5);
    $cart->addItem('P002',10);
    $cart->addItem('P003',3);
    $cart->edItem('P001',30);

    $list = $cart->getBuylist();


//-------------------------------------------------------------

    echo "Menber : {$menber->getName()}, Welcome<br>";
    echo "<hr>";

    foreach ($list as $k=>$v){
        echo "{$k} : {$v}<br>";
    }
?>

<a href="test42.php">Next Page</a>
