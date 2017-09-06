<?php
    // 各種型態的array可混合使用

    // 1. call array function
    $a = array(1,2,3,4,5);
    //    echo gettype($a);
    echo count($a);

    echo '<hr>';
    // 2.
    $b[0] = 12;
    $b[7] = 12.34;
    $b[4] = 'sally';
    echo gettype($b) . ':' . count($b);     // count中間會跳過 不會自動補上

    echo '<hr>';
    // 3.
    $c[] = 12;
    $c[] = 12.123;
    echo gettype($c) . ':' . count($c);

    echo '<hr>';
    // 4.
    $d['name'] = 'sally';
    $d['gender'] = false;
    $d['age'] = 20;
    echo gettype($d) . ':' . count($d);

    echo '<hr>';
    $ary = array(1,2);
    $ary[] = '123';     // 1,2,123
    $ary[7] = 12.3;     // 0=>1, 1=>2, 2=>123, 7=>12.3
    $ary['name'] = 'sally';     // 0=>1, 1=>2, 2=>123, 7=>12.3, 'name'=>'sally'
    var_dump($ary);             // 除錯用 任何變數皆可使用

    echo '<hr>';
    for ($i=0; $i<count($a); $i++){
        echo "{$a[$i]}<br>";
    }

    echo '<hr>';
    foreach ($ary as $key => $value){       // 看key所對應的值 只看值就只打$value value可變更
        echo "{$key}-->{$value}<br>";
    }