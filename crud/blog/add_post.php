<?php
include_once("init.php");
if(isset($_POST['title'],$_POST['contents'],$_POST['category']))
{
 $errors=array();
  $title  = trim($_POST['title']);
  $contents   = trim($_POST['contents']);
 if(empty($title)){
  $errors[]="you need to supply a title";
  }if(empty($contents)){
  $errors[]="you need to supply some text";
  }if(!category_exists('id',$_POST['category'])){
  $errors[]="the category doesn't exists";
  }
  if(empty($errors)){
  add_posts($title,$contents,$_POST['category']);
  

  
  }															
  }
?>
<html>
<head>
<style>
label{display:block; }
</style>
</head>
<body>
 <h1>add a post</h1>
 <?php
 if(isset($errors) &&!empty($errors)){
  echo'<ul><li>',implode('</li><li>',$errors),'</li></ul>';
  }
 ?>
 <form action="" method="post">
 <div>
 <label for="title">Tiltle</label>
 <input type="text" name="title">
 </div>
 <div>
 <label for="contents">Contents</label>
 <textarea name="contents" rows="10" cols="30"></textarea>
 </div>
 <div>
 <label for="category">Category</label>
 <select name="category">
  <?php
   foreach(get_categories() as $category){
   ?>
   <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
   <?php
   }
   ?>
   </select>
   </div>
   <div>
   <input type="submit" value="add post"/>
   </div>
   </form>
</body>
</html>