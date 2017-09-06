<?php
$json = file_get_contents('http://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx');


$root = json_decode($json);
//var_dump($root);   // --> array

$mysqli = new mysqli('localhost','root','root','iii');

foreach ($root as $data){
//    var_dump($value);    --> object
    $name = $data->Name;
    $tel = $data->Tel;
    $addr = $data->Address;
    $img = $data->PicURL;

    $coord = $data->Coordinate;       // xxx.xxx,yyy.yyy
    $latlng = explode(',',$coord);
    $lat = $latlng[0];
    $lng = $latlng[1];

    $feature = $data->FoodFeature;
    $city = $data->City;
    $town = $data->Town;

    $sql = "insert into food (`name`,tel,addr,img,lat,lng,feature,city,town)".
        "values ('{$name}','{$tel}','{$addr}','{$img}','{$lat}','{$lng}','{$feature}','{$city}','{$town}')";
    $mysqli->query($sql);
}
