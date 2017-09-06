<?php
    $passwd = '123456';
    $newpassed = password_hash($passwd,PASSWORD_DEFAULT);
    echo $newpassed;
    echo "<hr>";

    $input = '123456';
    if (password_verify($input,$newpassed)){
        echo "OK";
    }else{
        echo "XX";
    }