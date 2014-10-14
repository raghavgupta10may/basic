<?php
session_start();
if(isset($_POST['submit'])){
$mypic = $_FILES['newupload']['name'];
$temp =$_FILES['newupload']['tmp_name'];
$type = $_FILES['newupload']['type'];
$id=$_REQUEST['id'];
$newname=$_REQUEST['newname'];
$newemail=$_REQUEST['newemail'];
$newpassword=$_REQUEST['newpassword'];
if(($type=="image/jpeg")||($type="image/jpg")){
if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z]+\.)+[a-zA-Z]{2,6}$/i",$newemail))
{
$dir="profiles/".$_SESSION['name']."/images";
$open=opendir($dir);
$files=0;
while(($file=readdir($open))!= FALSE)
{
  if($file!="." &&$file!=".." &&$file!="Thumbs.db")
  {
  unlink($dir."/".$file);
  $files++;
  }
 }
	closedir($open);
	sleep(1);
	rename("profiles/".$_SESSION['name']."","profiles/$newname");
	
move_uploaded_file($temp,"profiles/$newname/images/$mypic");

mysql_connect("localhost","root","")or die("no connection");
mysql_select_db("test");
mysql_query("UPDATE raghav SET name='$newname',email='$newemail',password='$newpassword'
WHERE id='$id'");
echo" your values have been updated successfully!";
header ("refresh:2,url=logout.php");
}else{echo "invalid email";}
}else{echo "this file is not valid";}
 }else{echo "enter the values";}
 
?>

