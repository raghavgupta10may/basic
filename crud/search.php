<?php session_start();
include("session.php");
?>
<html>
<head>
</head>
<body>
<center>
<form method="get" action="search.php"> 
<input type="text" name="search">
<input type="submit" name="submit" value="search database">

</form>
</center>
<hr/>
<?php
session_start();
if(!isset($_SESSION['name']))
{
echo "access denied";
}else{
if(isset($_REQUEST['submit']))
{
   $search=$_GET['search'];
   $terms=explode(" ",$search);
   $query="SELECT * FROM raghav WHERE name LIKE '%$search%'";
 /*  $i=0;
  foreach($terms as $each)
  {
   $i++;
	if($i==1){
     $query.="name LIKE('%$each%') ";
    }else{
     $query.="OR name LIKE('%$each%') ";		
    }
  }
*/
mysql_connect("localhost","root","");
mysql_select_db("test");
  $query = mysql_query($query);
  $num = mysql_num_rows($query);
  if($num == FALSE) {
    echo mysql_error(); // TODO: better error handling
	}
if($num>0 && $search!="")
  {
   while($row=mysql_fetch_assoc($query))
   {
   $id=$row['id'];
   $name=$row['name']; 
   $email=$row['email'];
   $password=$row['password'];
   echo "<h3>name:$name(id:$id)</h3><br/>email: $email<br/>";
   }
  }
 else{echo "no results found";}
mysql_close();
 
 } else{
   echo "please type something to search";
      }
	  }
?>

</body>
</html>