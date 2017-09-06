<?php
    session_start();
    unset($_SESSION['var1']);  //只刪掉var1
    session_destroy();