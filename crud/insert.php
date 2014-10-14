<?php
$mypic = $_FILES['upload']['name'];
$temp =$_FILES['upload']['tmp_name'];
$type = $_FILES['upload']['type'];

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

echo $_POST["name"]."<br/>";
echo $_POST["email"]."<br/>";
echo $_POST["password"]."<br/>";


if($name && $email && $password)
{
 if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z]+\.)+[a-zA-Z]{2,6}$/i",$email)) {
 if(strlen($password)>3){
mysql_connect("localhost","root","") or die("we couln't connect");
mysql_select_db("test");

$username=mysql_query("SELECT name FROM raghav WHERE name='$name'");
$count=mysql_num_rows($username);
if($count!=0)
{
include ("links.php");
die("name already exists!Please choose another name");
}
}else{echo "enter password greater than 3 characters";}
}else{echo"please type a valid email";}
if(($type=="image/jpeg")||($type="image/jpg")){
$directory="./profiles/$name/images/";
mkdir($directory,0777,true);
move_uploaded_file($temp,"profiles/$name/images/$mypic");
echo"<b>DP</b><img width='200' height='300' src ='profiles/$name/images/$mypic'><p>";
}else{echo "this file is not valid";}

mysql_query("INSERT INTO raghav(name,email,password)VALUES('$name','$email','$password')");
$submitted=mysql_affected_rows();
echo "$submitted was inserted";
 

}

else
{
echo "complete the form";
}

mysql_close();
?>
<p>
<h3><center>
<?php include("links.php");?>
</center></h3>