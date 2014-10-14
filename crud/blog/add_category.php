<?php
include_once("init.php");
if(isset($_POST['submit'])){
if(isset($_POST['name']))
{
$name=trim($_POST['name']);
  if(empty($name)){
  $error="You must submit a category name";
  }else if(category_exists('name',$name)){
  $error="That category already exists";
  }else if(strlen($name)>24){
  $error="category name can be only upto 24 characters";
}
 if(!isset($error)){
     add_category($name);
    }
	header('refresh:2,url=category_list.php');
}
}	
?>
<html>
<head>
</head>
<body>
  <h1>Add a Category</h1>
  <?php
   if(isset($error)){
   echo"<p>{$error}</p>\n";
   }
  ?>
  <form action="" method="post">
  <b>Name:</b><input type="text" name="name" value="">
  
  <p><input type="submit" name="submit" value="add category"><p>
</form>
</body>
</html>