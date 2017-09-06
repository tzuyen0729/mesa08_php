<?php

    if (isset($_GET['account'])){
        echo $_GET['account'];
    }else{
        echo 'no data';              // 使用者直接到22檔案顯示no data
    }
