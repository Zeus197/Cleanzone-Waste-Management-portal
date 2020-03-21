<?php
include("database.php");


$s1 = $_POST["email"];
$s2 = $_POST["work"];

$ss = "insert into workform values('$s1','$s2')";
$l = mysql_query($ss);
if($l)
{
	header("location:input.html");
}
?>