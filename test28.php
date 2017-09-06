<?php
//    $fp = fopen("./dir1/wc.csv","r");
    $fp = fopen("http://data.tycg.gov.tw/opendata/datalist/datasetMeta/download?id=5ed69a41-1389-47ee-aa7b-0531092d5a9c&rid=1deb0e4f-0e0b-4293-b935-7480108b61dd","r");
    $line = fgets($fp);  // fread:布林值判斷 所以遇0脫離迴圈
    $line = fgets($fp);
//    $line = iconv("BIG5","UTF-8",$line);    //將BIG5編碼轉換成UTF-8


    $row = explode(',',$line);
    foreach ($row as $v){
        echo "{$v}<br>";
    }





    fclose($fp);