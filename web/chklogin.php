
<?php
SESSION_START();
include("database.php");


$s1 = $_POST["email"];
$s2 = $_POST["password"];



$q="select * from signup  where email='$s1'";
 $s=mysql_query($q);
$e= mysql_fetch_row($s);
$rr=$e[1];
if($s1==$rr)
{
	echo $_SESSION['name']=$rr;
header("location:customer.php");
}
?>