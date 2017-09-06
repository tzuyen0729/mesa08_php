<?php
    $a = 101; $b = 8;
    switch ($a){
        case 1:
            echo 'A';
            break;
        default:                //判斷式成立 會執行下面程式 直到找到break
            echo 'Default';
//            break;
        case 10:                //8+2, 10.0 $b+2 結果相同
            echo 'B';
//            break;
        case 100:
            echo 'C';
            break;

    }
    echo '<br>Finish';