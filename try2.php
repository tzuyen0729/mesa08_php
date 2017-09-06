<?php
    for ($i=0;$i<52;$i++){
        do{
            $temp = rand(0,51);
            $isrp=false;

            for ($j=0; $j<$i; $j++){
                if($card[$j]==$temp){
                    $isrp = true;
                    break;
                }
            }
        } while($isrp);



            $card[$i] = $temp;

        echo "$card[$i]<br>";
    }