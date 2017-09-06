<?php
    function sayYa($count, $name = 'World'){    // 選項放後面 必要的放第一個
        for ($i=0; $i<$count; $i++) {
            echo "Ya, {$name}<br>";
        }

    }


    function fx($x){
        return 2 * $x +1;
    }

    function test(){
        for ($i=0; $i<func_num_args(); $i++){       // func_num_args回傳函數參數個數
            echo func_get_arg($i)."<br>";           // func_get_arg 回傳參數的值
        }
    }

    function test2 (){
        $args = func_get_args();                    // func_get_args回傳一個陣列包含參數
        foreach ($args as $v){
            echo "{$v}<br>";
        }
    }


    test2(1,2,3,4,'ii',true);

//    sayYa(3);                            // 沒帶參數則用預設值
//    $v = fx(4);
//    echo $v;