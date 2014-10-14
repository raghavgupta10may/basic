<?php
if(!isset($_SESSION['name']))
{echo "Access Denied";
exit;
}
else{
$dir="profiles/".$_SESSION['name']."/images/";
$open=opendir($dir);
while(($file=readdir($open))!= FALSE)
{
  if($file!="." && $file!=".." && $file!="Thumbs.db")
  {
    echo"<img border='2' width='70' hieght='100' src='$dir/$file'>";
	}
}	
echo "<b>".$_SESSION['name']."</b>'s session<br/><a href='logout.php'>LOGOUT</a><hr/>"; 


}


?>