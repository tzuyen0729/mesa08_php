<?php
$mysqli = new mysqli('localhost','root','root','iii');
$account = $_GET['account'];
$sql = "select account from member where account='{$account}'";
$result = $mysqli->query($sql);
echo $result->num_rows;