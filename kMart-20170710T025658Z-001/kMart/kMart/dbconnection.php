<?php
$mysql_hostname = "localhost";
$mysql_user ="thesups8_kadmin";
$mysql_password ="kadmin2017";
$mysql_database ="thesups8_kMart";

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("oops !Could not connect database");
//mysqli_select_db($bd, $mysql_database) or die("opps! database not connected");

?>
