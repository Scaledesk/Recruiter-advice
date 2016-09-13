<?php
require('connection.php');
/**
 * Created by PhpStorm.
 * User: satya
 * Date: 11/9/16
 * Time: 3:18 PM
 */
$iddel =$_POST['id'];
mysql_query("delete from Partners WHERE id='$iddel'");


?>