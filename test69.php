<?php

    // JSON => 陣列(是一般陣列 只有帶值) 不是PHP的陣列

    $a = array(1,2,'haha',4,5,true);
//    echo json_encode($a);
//    echo "<hr>";

    $b = array(1,'name'=>'haha','stage'=>3,4,5);     // Object
//    echo json_encode($b);
//    echo "<hr>";

    class Member {
        var $name, $id;
    }

    class MyCart {
        var $list;
        var $member;
    }

    $m1 = new Member(); $m1->id='001'; $m1->name = 'haha';
    $cart1 = new MyCart(); $cart1->member = $m1;
    $cart1->list = array('P001'=>12, 'P003'=>7, 'P043'=>2);

    $m2 = new Member(); $m2->id='002'; $m2->name = 'lin';
    $cart2 = new MyCart(); $cart2->member = $m2;
    $cart2->list = array('P007'=>2, 'P056'=>7);

    $m3 = new Member(); $m3->id='003'; $m3->name = 'tony';
    $cart3 = new MyCart(); $cart3->member = $m3;
    $cart3->list = array('P023'=>123, 'P170'=>5, 'P256'=>12);

    $c = array($cart1,$cart2,$cart3);

    echo json_encode($c);
//    echo "<hr>";