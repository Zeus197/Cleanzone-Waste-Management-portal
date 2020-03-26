<?php
include("database.php");


$s =$_POST["name"];

$s1 =$_POST["email"];
$s2 =$_POST["subject"];
$s3 =$_POST["feedback"];


$q="insert into feedback VALUES('$s','$s1','$s2','$s3')";
$l=mysql_query($q);

?>