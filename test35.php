<?php

    $rate = $_GET['rate'];
    // 1. 創畫布 (1. 空白 2. 既有的圖)
    $img = imagecreate(400,40);

    // 2. 開始畫
    $yellow = imagecolorallocate($img,255,255,0);
    imagefilledrectangle($img,0,0,400,40, $yellow);

    //    imagefill($img,0,0,$yellow);  效果一樣

    $red = imagecolorallocate($img,255,0,0);
    imagefilledrectangle($img,0,0,(int)(400*$rate/100),40,$red);

    // 3. 記憶體 -> 輸出到 (1. 畫面 2. 檔案)
    header('content-type: image/jpeg');     //header前面不能有任何空白與輸出 content-type宣告種類
    imagejpeg($img);

    // 4. 清除
    imagedestroy($img);