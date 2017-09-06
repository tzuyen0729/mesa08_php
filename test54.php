<?php
    $mysqli = @new mysqli(
        'Localhost',
        'root',
        'root',
        'iii');

  $sql = "insert into member(account,passwd,realname) values ('haha','123','Haha')";
  $mysqli->query($sql);

//$sql = "delete from member where id=4";

//$sql = "update member set account='tony',passwd='321' where id=2";

$sql = "select * from member";


  $result = $mysqli->query($sql);  // return a mysqli_query object
//  echo $mysqli->affected_rows;
//  var_dump($ret);
//echo $result->num_rows;
//while ($data = $result->fetch_assoc()){
//    echo "{$data['id']} : {$data['account']} : {$data['realname']}<br>";
//}

$data = $result->fetch_object();
//var_dump($data);
echo $data->account;
