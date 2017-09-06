<?php

?>


<script>
    function chForm() {
        return  true;
    }
</script>



<form action="test20.php" method="get">
    <input name="account"><br>
    <input type="password" name="password"><br>
    <input type="radio" name="gender" value="m" checked>Male
    <input type="radio" name="gender" value="f">Female
    <!-- radio的name若設為不同 不會為一個群組 同個群組只能選一個 設值才知道選哪個
         checked為預設選項 讓後端不會沒值-->
    <br>
    <input type="checkbox" name="like[]" value="1">打電腦
    <input type="checkbox" name="like[]" value="2">打電動
    <input type="checkbox" name="like[]" value="3">打籃球<br>
    <input type="checkbox" name="like[]" value="4">打麻將
    <input type="checkbox" name="like[]" value="5">打排球
    <input type="checkbox" name="like[]" value="6">打毛線<br>
    <select name="area">
        <option value="401">北屯區</option>
        <option value="402">西屯區</option>
        <option value="403">南屯區</option>
        <option value="404">中區</option>
    </select><br>
    <textarea name="memo" rows="10" cols="40"></textarea><br>
    <!-- textarea標籤若分開 中間空格也跟著算內容 -->
    <input type="file" name="upload"><br>
    <!--檔案傳遞一定要用post方法 -->
    <input type="submit" name="what" value="OK1">
    <input type="submit" name="what" value="OK2">
    <!-- 表單送出資料是送到它所處表單位置 若有兩個按鈕 會看name判別送出-->
</form>
<hr>
<!-- Event ==> onXXX="處理事件(JS)" -->
<form action="test21.php" onsubmit="return chForm();" method="get">
    <!-- 要有return 不然只有做chForm動作 決定要不要送表單 -->
    <input name="account"><br>
    <input type="password" name="password"><br>
    <input type="submit" value="OK">
</form>
<hr>
<form action="test22.php">
    <input type="text" name="account"><br>
    <input type="submit" value="OK">
</form>