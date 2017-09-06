<?php
include 'testapi.php';
start_session(10);
//    session_start();    // 宣告頁面會使用session變數 session之前不能有任何輸出
    $var1 = null ;
    $var2 = array(1,1);
    $var3 = false;
    $haha = new haha;

    $_SESSION['var1'] = $var1;      // 直接到text51.php的話 資料還在 關掉瀏覽器 在session時間內資料還在
    $_SESSION['var2'] = $var2;      // session時間在設定檔session.cache_expire
    $_SESSION['var3'] = $var3;      // 不要資料時用unset
    $_SESSION['haha'] = $haha;

        $haha->Var1 = 34;
//        $var1=34;
?>
<!--<a href="test51.php?var1=--><?php //echo $var1; ?><!--&var2=--><?php //echo $var2; ?><!--">test51</a>-->
<!-- 上面使用url連接 url連結只能傳文字-->
<a href="test51.php">test51</a>