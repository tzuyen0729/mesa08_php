<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    function test2() {
        //檢查資料是否重複
        var account = $("#account").val();
        $.get("test62.php?account="+account,function (data,status) {
            if (data>=1){
                $("#mesg").html("資料重複!!");
                $("#account").focus();
            }else{
                $("#mesg").html("");
            }
        })
    }
</script>


<form action="test56.php">
    Account: <input name="account" id="account" onblur="test2()"><span id="mesg"></span><br>
    Password: <input type="password" name="passwd"><br>
    Real name: <input name="realname"><br>

    <input type="submit" value="Add">
</form>