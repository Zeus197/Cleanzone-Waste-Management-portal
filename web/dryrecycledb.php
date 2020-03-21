<?php
include("database.php");
$s =$_POST["itemrecycled"];

$s1 =$_POST["date"];
$q="insert into dryrecycledb VALUES('$s','$s1')";
$l=mysql_query($q);
?>