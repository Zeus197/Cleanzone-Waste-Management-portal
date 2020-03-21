<?php
include("database.php");
$s =$_POST["itemrecycled"];

$s1 =$_POST["date"];
$q="insert into wetrecycledb VALUES('$s','$s1')";
$l=mysql_query($q);
?>