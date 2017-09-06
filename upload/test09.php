<?php
    $a = '012' ;
    if ($a){
        echo "OK";          // ture, 0.123, -123
    } else {
        echo "XX";          // 0, '', '0', null, false
    }