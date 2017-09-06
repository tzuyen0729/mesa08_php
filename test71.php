<?php
$json = file_get_contents('http://localhost/test69.php');
$root = json_decode($json);
var_dump($root);
echo "<hr>";
foreach ($root as $k=>$v){
    echo "{$k} : {$v}<br>";
}