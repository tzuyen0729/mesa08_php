<?php
$mysqli = new mysqli('localhost','root','root','iii');

$account = $_GET['account'];
$passwd = password_hash($_GET['passwd'],PASSWORD_DEFAULT);
$realname = $_GET['realname'];

$sql = "insert into member (account,passwd,realname) values ('{$account}','{$passwd}','{$realname}')";
$mysqli->query($sql);
header("Location: test55.php");

