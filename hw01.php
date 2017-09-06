<?php
    $r = $year = $month ="";
    if(isset($_GET['year'])) {
        $year = $_GET['year'];
        $month = $_GET['month'];

        switch ($month){
            case 2:
                if($year % 4 == 0){
                    if($year % 100 == 0){
                        if($year % 400 == 0){
                            $r = 29 ;
                        }else{
                            $r = 28 ;
                        }

                    }else{
                        $r = 29;
                    }


                }else{
                    $r = 28;
                }
//                $r = 28 ;
//                echo '28';
                break;

            case 4: case 6: case 9: case 11:
            $r = 30 ;
//            echo '30';
            break;
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $r = 31 ;
//                echo '31';
            break;
            default:
                $r = 'XX' ;
//                echo 'XX';
                break;
        }

    }

?>


<form>
    <input name="year" value="<?php echo $year ?>"/>
    年
    <input name="month" value="<?php echo $month ?>"/>
    月
    <input type="submit" value="=>" />
    <?php
        echo "{$r} 天";
    ?>


</form>



