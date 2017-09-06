<?php
    date_default_timezone_set("Asia/Taipei");       // 改成現在時區
//    $dir = opendir("c:/test1");     //  用\會有問題 可用把外面改''或中間改\\或直接改/

    $dir = @opendir(".") or exit('Server Busy');      // .為目前所在的路徑 /根目錄
                                                            // @抑制訊息符號 用exit或die一樣
    while ($count = readdir($dir)){

        echo $count . " : ";
        if (is_dir("./{$count}")){
            echo "[DIR] : ";
        }else if (is_file("./{$count}")){
            echo "[FILE] : ";
        }

        echo date('Y-m-d H:i:s',filemtime("./{$count}"));
        // 使用Timestamp標示 離1970年<=Unix紀年
        echo "<br>";
    }

    echo"<hr>";
    if (@copy('./dir1/file1','./dir2/file2')){      // copy dir1/file1 to dir2 as file2
        echo "Copy OK";
    }else{
        echo "Copy Fail";
    }

    echo"<br>";
    if(unlink('./dir2/file2')){
        echo "Delete OK";
    }else{
        echo "Delete Fail";
    }