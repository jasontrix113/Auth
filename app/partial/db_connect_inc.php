<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 4/10/2019
 * Time: 1:35 PM
 */

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "auth";
    $msg = "Cannot connect";

    $db_con = mysqli_connect($host,$user,$pass, $db)or die($msg);
