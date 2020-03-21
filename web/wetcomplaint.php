<?php
include("database.php");

$s =$_POST["firstname"];
$s1 =$_POST["lastname"];
$s2 =$_POST["phone_number"];
$s3 =$_POST["gender"];
$s4 =$_POST["area"];
$s5 =$_POST["wastage"];
$id=mktime();
$q="insert into wetcomplaint VALUES('$id','$s','$s1','$s2','$s3','$s4','$s5')";
$l=mysql_query($q);

?>