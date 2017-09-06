<table border="1" width="100%">


    <?php
        for ($k=0; $k<2 ; $k++){            // 跑2圈
            echo '<tr>';
            for ($j=2; $j<=5; $j++){
                $newj = $j + $k * 4;


                if (($j+$k)%2==0){
                    echo "<td bgcolor='#ffc0cb'>";
                }else{
                    echo "<td bgcolor='orange'>";
                }

                for ($i=1; $i<=9; $i++){
                    $r = $newj * $i;
                    echo "{$newj}x{$i}={$r} <br>";
                }
                echo "</td>";
            }
            echo '</tr>';
        }

    ?>



</table>