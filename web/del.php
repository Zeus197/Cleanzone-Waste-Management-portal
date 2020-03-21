<?php

include("database.php");
$id=$_GET["id"];
$q="DELETE FROM drycomplaint WHERE Id='$id'";
$s=mysql_query($q);
if($s)
{
echo"Data deleted";
}



?>