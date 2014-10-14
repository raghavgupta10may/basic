<?php

mysql_connect("localhost","root","")or die("error with the connection");
mysql_select_db("test");
$result=mysql_query("SELECT * FROM raghav WHERE id='".$_REQUEST['ids']."'");

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
  
  echo"<tr><td align=center>$id</td>
  <td>$name</td><td>$email</td><td>$password</td></tr>";
  }
  echo "</table>";
  mysql_close();
  
 
 ?>
 <form method="post" action="delete2.php">
 <p><b>Are you sure you want to delete this user?</b></p><br/>
 <input type="submit" name="submit" value="ok"/>
 <input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>"/>
 </form>
 <?php include("links.php");?>