<?php

    if (isset($_REQUEST['account'])){           // form的method用get或post  requst都收
        $account = $_REQUEST['account'];
        $password = $_REQUEST['password'];
        echo "{$account} : {$password}<br>";

        $like = $_REQUEST['like'];
        foreach ($like as $k => $v){
            echo "{$k} : {$v}<br>";
        }
    }
