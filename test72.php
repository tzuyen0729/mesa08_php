<?php
$json = file_get_contents('http://localhost/test69.php');
$root = json_decode($json);
var_dump($root);
echo "<hr>";
foreach ($root as $data){
//    var_dump($data);
    $member = $data->member;      //object
//    var_dump($member);
    echo "Member: {$member->name} ({$member->id})<br>";

    $list = $data->list;
//    var_dump($list);
    foreach ($list as $p=>$q){
        echo "{$p} : {$q}<br>";
    }
    echo "<hr>";
}