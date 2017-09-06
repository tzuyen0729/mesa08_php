<?php

// 定義一個新class 裡面是屬性 屬性通常有一個值

class Bike {
    var $color;
    private $speed;         // 屬性看不到 所以加上修飾 叫封裝 避免不合理的數據

    // 建構式/方法/子=>物件初始化
    function __construct($s = 0){
        if (! gettype($s) == (int)){$s=0}
        $this->speed = $s;
    }

    function upSpeed(){
        $this->speed = ($this->speed<1)?1:$this->speed*1.2;        // this該類別做出的物件實體
    }

    function downSpeed(){
        $this->speed = ($this->speed<1)?0:$this->speed*0.7;        // 內部的方法也可以封裝 也加上private
    }

    function getSpeed(){
        return $this->speed;
    }
}

$myBike = new Bike();   // new為產生物件實體
echo "myBike : {$myBike->getSpeed()}<br>";

$urBike = new Bike(4);   // new為產生物件實體
echo "urBike : {$urBike->getSpeed()}";

//$urBike = new Bike;   // 沒有做建構式 可以不加()

//$myBike->speed = 1;    // ->指向它所擁有
//$urBike->speed = 20;
//
//$myBike->upSpeed();
//$myBike->upSpeed();
//
//
//
//echo "myBike : {$myBike->getSpeed()}<br>";
//echo "urBike : {$urBike->getSpeed()}";