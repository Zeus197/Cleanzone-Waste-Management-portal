<?php
include("database.php");
$e="select * from wetcount ";
$rr=mysql_query($e);
$mm=mysql_fetch_row($rr);
$j= $mm[0];





$s =$_POST["firstname"];
$s1 =$_POST["lastname"];
$s2 =$_POST["phone_number"];
$s3 =$_POST["gender"];
$s4 =$_POST["area"];
$s5 =$_POST["wastage"];
$id=mktime();
$q="insert into wetcomplaint VALUES('$id','$s','$s1','$s2','$s3','$s4','$s5','$j')";
$l=mysql_query($q);
$j++;
$ww="update drycount set num=$j";
mysql_query($ww);
?>