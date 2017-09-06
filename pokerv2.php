<?php
    // 1. 洗牌
    for ($i=0; $i<52; $i++){
        do {
            $temp = rand(0,51);
            //check repeat
            $isreapt = false;
            for ($j=0; $j<$i; $j++){
                if ($poker[$j]==$temp) {
                    // repeat
                    $isreapt = true;
                    break;
                }
            }
        }while($isreapt);


                $poker[$i]=$temp;

        echo "{$temp}<br>";
    }
    // 2. 發牌給4人

    // 3. 攤牌(理牌)