<?php                                       //判定是否為閏年
    $year = 2016;
    if ($year % 4 == 0){
        if ($year % 100 == 0){
            if ($year % 400 == 0){
                echo '29';
            }else{
                echo '28';
            }
        }else{
            echo '29';
        }
    }else{
        echo '28';
    }






