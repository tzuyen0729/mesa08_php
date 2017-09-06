<?php
$json = file_get_contents('http://localhost/test69.php');
$root = json_decode($json);
//var_dump($root);
foreach ($root as $v){
    echo "{$v}<br>";
}
