<?php
include("database.php");

$s = $_POST["name"];
$s1 = $_POST["email"];
$s2 = $_POST["password"];

$ss = "insert into signup VALUES('$s','$s1','$s2')";
$l = mysql_query($ss);


?>