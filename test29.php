<?php
    $fp = fopen("./dir1/file2","a+");
        // 若沒有檔案先用w+創一個 再用r+就OK a+會一直寫補在後面 ＋為write
    fwrite($fp,"Hello, World\nhaha\n1234567890");
    fclose($fp);