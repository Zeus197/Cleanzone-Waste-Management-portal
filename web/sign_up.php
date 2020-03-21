<?php
include("database.php");

$s = $_POST["name"];
$s1 = $_POST["email"];
$s2 = $_POST["password"];

$ss = "insert into signup values('$s','$s1','$s2')";
$l = mysql_query($ss);
if($l)
{
	header("location:signin.php");
}
?>