<?php
session_start();
if(!isset($_SESSION['name']))
{
echo "access denied";
}else{
include("session.php");
 
echo "<h3>choose an id you want to edit:</h3><p>";
mysql_connect("localhost","root","")or die("error with the connection");
mysql_select_db("test");
$result=mysql_query("SELECT * FROM raghav");

echo "<table width='90%' align=center border=2>";
echo "<tr><td width='40%' align=center bgcolor='yellow'>ID</td>
<td width='40%' align=center bgcolor='yellow'>NAME</td>
<td width='40%' align=center bgcolor='yellow'>EMAIL</td>
<td width='40%' align=center bgcolor='yellow'>PASSWORD</td></tr>";

while($row=mysql_fetch_array($result))
{
  $id=$row["id"];
  $name=$row["name"];
  $email=$row["email"];
  $password=$row["password"];
  
  echo"<tr><td align=center>
  <a href='updateform.php? ids=$id&names=$name&emails=$email&passwords=$password'>$id</a></td>
  <td>$name</td><td><a href=\"emailto.php?emails=$email\">$email</a></td><td>$password</td></tr>";
  }
  echo "</table>";
  mysql_close();
  
 include("links.php");
 }
 ?>
