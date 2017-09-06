<?php

    class Cart{
        private $menber;
        private $buylist;
        function __construct($menber){
            $this->menber = $menber;
            $this->buylist = array();
        }
        function addItem($pid,$qty){
            if(!isset($this->buylist[$pid])){
                $this->buylist[$pid] = $qty;
            }
            /*if (!array_key_exists($pid, $this->buylist)) {
                echo "The {$pid} is in your buylist";
            } 一樣*/

        }
        function edItem($pid,$qty){
            if(isset($this->buylist[$pid])){
                $this->buylist[$pid] = $qty;
            }
        }
        function rmItem($pid){
            if(isset($this->buylist[$pid])){
                unset($this->buylist[$pid]);
            }
        }
        function getBuylist(){
            return $this->buylist;
        }
        function getMenber(){
            return $this->menber;
        }

    }

    class Menber{
        private $id, $name, $level;
        function __construct($id,$name,$level){     //命名方式 屬性全小寫
            $this->id = $id;
            $this->name = $name;
            $this->level = $level;
        }
        function getId(){return $this->id;}
        function getName(){return $this->name;}     // 方法駝峰式命名
        function getLevel(){return $this->level;}
    }



    function start_session($expire = 0){
        if ($expire == 0) {
            $expire = ini_get('session.gc_maxlifetime');
        } else {
            ini_set('session.gc_maxlifetime', $expire);
        }
        if (empty($_COOKIE['PHPSESSID'])) {
            session_set_cookie_params($expire);
            session_start();
        } else {
            session_start();
            setcookie('PHPSESSID',
                session_id(), time() + $expire);
        }
    }


    class haha{
        var $Var1;
    }