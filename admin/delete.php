<?php
error_reporting (1);
require('connection.php');
session_start();
$user_check=$_SESSION['login_user'];

if(!isset($user_check))
{
    header("Location: login.php");
}


/**
 * Created by PhpStorm.
 * User: satya
 * Date: 11/9/16
 * Time: 3:18 PM
 */
$iddel =$_POST['id'];
mysql_query("delete from Partners WHERE id='$iddel'");


?>