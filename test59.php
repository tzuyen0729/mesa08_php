<?php
    if(!isset($_GET['account'])) header("Location: test55.php");


    $mysqli = new mysqli('localhost','root','root','iii');

    $id = $_GET['id'];
    $account = $_GET['account'];
    $passwd = password_hash($_GET['passwd'],PASSWORD_DEFAULT);
    $realname = $_GET['realname'];

    $sql = "update member set account='{$account}',passwd='{$passwd}',realname='{$realname}'where id={$id}";
    $mysqli->query($sql);
    header("Location: test55.php");