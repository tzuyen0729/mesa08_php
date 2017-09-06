<?php
    if(!isset($_GET['editid'])) header("Location: test55.php");
    $editid = $_GET['editid'];
    $sql = "select * from member where id={$editid}";

    $mysqli = new mysqli('localhost','root','root','iii');
    $result = $mysqli->query($sql);
$data = $result->fetch_object();

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    function test2() {
        //檢查資料是否重複
        var account = $("#account").val();
        $.get("test63.php?account="+account+"&id="+id,function (data,status) {
            if (data>=1){
                $("#mesg").html("帳號已存在!!");
                $("#account").focus();
            }else{
                $("#mesg").html("");
            }
        })
    }
</script>

<h1>Edit Member</h1>
<form action="test59.php">
    <input type="hidden" id="id" name="id" value="<?php echo $editid; ?>">
    Account: <input name="account" id="account" onblur="test2()" value="<?php echo $data->account; ?>">
    <span id="mesg"></span><br>
    Password: <input type="password" name="passwd"><br>
    Real name: <input name="realname" value="<?php echo $data->realname; ?>"><br>

    <input type="submit" value="Edit">
</form>