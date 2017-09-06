<?php

    // 1. 創畫布 (1. 空白 2. 既有的圖)
    $imgS = imagecreatefromjpeg("./image/car.jpeg");
    $imgT = imagecreate(200,200);

    // 2. 開始畫
    $imgSW = imagesx($imgS); $imgSH = imagesy($imgS);

    if($imgSH > $imgSW){
        $imgTH = 200;
        $imgTW = $imgSW * $imgTH / $imgSH;
    }else{
        $imgTW = 200;
        $imgTH = $imgSH * $imgTW / $imgSW;
    }

//echo "{$imgTW} x {$imgTH}";
    $white = imagecolorallocate($imgT, 255,255,255);
    imagefilledrectangle($imgT,0,0,200,200,$white);

    imagecopyresized ($imgT ,$imgS,0,0,0,0,
        $imgTW,$imgTH, $imgSW,$imgSH);

    // 3. 記憶體 -> 輸出到 (1. 畫面 2. 檔案)
    header('content-type: image/jpeg');     //header前面不能有任何空白與輸出 content-type宣告種類
    imagejpeg($imgT);

    // 4. 清除
    imagedestroy($imgS);
    imagedestroy($imgT);