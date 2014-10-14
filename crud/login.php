<?php
session_start();
if($_POST){
$_SESSION['name']=$_POST['name'];
$_SESSION['password']=$_POST['password'];
if($_SESSION['name'] && $_SESSION['password'])
{
mysql_connect("localhost","root","");
mysql_select_db("test");
$query=mysql_query("SELECT * FROM raghav WHERE name='".$_SESSION['name']."'");
$num=mysql_num_rows($query);
if($num !=0)
{
  while($row=mysql_fetch_assoc($query))
    {
    $dbname=$row['name'];
	$dbpassword=$row['password'];
	}
    if($_SESSION['name']==$dbname){
       if($_SESSION['password']==$dbpassword){	
	     echo "you are in!";
		 header("refresh:2;url=users.php");
		 
		 }else{echo "incorrect password";}
	}else{echo"incorrect name";}
}else{echo"name not registered";}
}else{echo"enter name and password";}	 

}else{
echo "access denied";
exit;
}
?>