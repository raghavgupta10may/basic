<?php

mysql_connect("localhost","root","")or die("error with the connection");
mysql_select_db("test");
$result=mysql_query("SELECT * FROM raghav");
while($row=mysql_fetch_array($result))
{
echo $row["name"]." ".$row["email"]." ".$row["password"];
echo "<br/>";
}
mysql_close();

 include("links.php");?>

