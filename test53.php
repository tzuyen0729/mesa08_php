<?php
    $mysqli1 = @new mysqli(
        'Localhost',
        'root',
        'root');

    if ($mysqli1->connect_error){
        die($mysqli1->connect_error);
    }

    $ret= $mysqli1->query("Create database test4");  // 傳回布林值 ===是值跟型別都相同 避開0,1的動作
    var_dump($ret);

//    $mysqli2 = @new mysqli(
//        'Localhost',
//        'root',
//        'root',
//        'iii');     // 進入資料庫iii
//
//    if ($mysqli2->connect_error){
//        die($mysqli2->connect_error);
//    }
//
//    echo "OK2";