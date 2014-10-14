<?php
include ("init.php");
$post = get_posts($_GET['id']);
if(isset($_POST['title'],$_POST['contents'],$_POST['category']))
{
 $errors=array();
 
 $title=trim($_POST['title']);
 $contents=trim($_POST['contents']);
 if(empty($title)){
  $errors[]="you need to supply a title";
  }if(empty($contents)){
  $errors[]="you need to supply some text";
  }if(!category_exists('id',$_POST['category'])){
  $errors[]="the category doesn't exists";
  }
  if(empty($errors)){
  edit_posts($_GET['id'],$title,$contents,$_POST['category']);
  header("location:index.php?id={[post[0]['post_id']}");

  die();
  }
  }

?>

<html>
<body>
 <h1>Edit a post</h1>
 
<html>
<body>
 <h1>Edit a post</h1>
 <?php
 if(isset($errors) &&!empty($errors)){
  echo'<ul><li>',implode('</li><li>',$errors),'</li></ul>';
  }
 ?>
 <form action="" method="post">
 <label for="title">Tiltle</label>
 <input type="text" name="title" value="<?php echo $post[0]['title'];?>">
 <label for="contents">Contents</label>
 <textarea name="contents" rows="10" cols="30"><?php echo $post[0]['contents'];?></textarea>
 <label for="category">Category</label>
 <select name="category">
  <?php
   foreach(get_categories() as $category){
   $selected=($category['name']==$post[0]['name'])?"selected='selected'":'';
   ?>
   <option value="<?php echo $category['id'];?>"<?php echo $selected;?>><?php echo $category['name'];?></option>
   <?php
   }
   ?>
   </select>
   <input type="submit" value="add post">
   </form>
   
</body>
</html>
