<?php


    // 1. 創畫布 (1. 空白 2. 既有的圖)
    $img = imagecreatefromjpeg('./image/moon.jpg');

    // 2. 開始畫
    $white = imagecolorallocate($img, 255,255,255);
    imagettftext ($img ,24 , 45, 350, 280, $white,'./fonts/fireflysung.ttf',
        '你好');

    // 3. 記憶體 -> 輸出到 (1. 畫面 2. 檔案)
//    header('content-type: image/jpeg');     //header前面不能有任何空白與輸出 content-type宣告種類
    imagejpeg($img,'./upload/img01.jpg');

    // 4. 清除
    imagedestroy($img);