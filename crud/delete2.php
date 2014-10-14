<?php
mysql_connect("localhost","root","")or die("error with the connection");
mysql_select_db("test");
mysql_query("DELETE FROM raghav WHERE id='".$_REQUEST['id']."'");
echo"The user has been deleted successfully!";
mysql_close();
include("links.php");
?>

