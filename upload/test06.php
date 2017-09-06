<?php
    $score = rand(0,100);
    echo "$score <br>";         // ''print string  " " print html
    if ($score>=90){
        echo 'A';
    } else if ($score>=80){
        echo 'B';
    } else if ($score>=70){
        echo 'C';
    } else if ($score>=60){
        echo 'D';
    } else {
        echo 'E';
    }

// if 後面只有一句敘述 {}可省略
// 所以下面程式可省略成上面


//    if ($score>=90){
//        echo 'A';
//    } else {
//        if ($score>=80){
//            echo 'B';
//        } else {
//            if ($score>=70){
//                echo 'C';
//            } else {
//                if ($score>=60) {
//                    echo 'D';
//                } else {
//                    echo 'E';
//                }
//            }
//        }
//    }