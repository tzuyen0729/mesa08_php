<?php
//    $weight = 80;
//    echo "Weight:{$weight}kg";          // 用{}為一組

    function ptxt(){
        echo "txt <br>";
    }

    function pline(){
        echo "<hr>";
    }


    $i = 0;
    for (ptxt(); $i<10; pline()){          //$i<10 可用function 但要回傳布林值
        echo "{$i}<br>";
        $i++;
    }