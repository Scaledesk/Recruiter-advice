<?php
include('connection.php');
session_start();
$user_check=$_SESSION['login_user'];


$data="SELECT username FROM auth WHERE user_name='$user_check' ";

$val=mysql_query($data);
$r=mysql_fetch_array($val);

$count = mysql_num_rows(mysql_query($data));



$login_session=$r['username'];

if(!isset($login_session))
{
    header("Location: login.php");
}
?>