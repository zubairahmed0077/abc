<?php
    $svr_name = "localhost";
    $u_name = "root";
    $pass = "";
    $db_name = "morning_nav";
    $con = mysqli_connect($svr_name,$u_name,$pass,$db_name);

    if(!$con){
        echo'connection failed';
    }
    // else{
    //     echo'connection hogya';
    // }

?>