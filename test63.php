<?php
$mysqli = new mysqli('localhost','root','root','iii');
$account = $_GET['account'];
$id = $_GET['id'];
$sql = "select account from member where id!={$id} and account='{$account}'";
$result = $mysqli->query($sql);
echo $result->num_rows;