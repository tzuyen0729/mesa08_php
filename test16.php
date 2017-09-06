<?php
    $p = array(1=>0,0,0,0,0,0);
//    var_dump($p);

    for ($i=0; $i<10000; $i++){
        $point = rand(1,9);
        $p[$point>=7?$point-3:$point]++;            // (boolean)?(值1):(值2)
                                                    // if boolean.value=true, 為值1
                                                    // if false, 為值2
    }

    foreach ($p as $k => $v){
        echo ("{$k}點出現{$v}次<br>");
    }