<?php
include ("init.php");
$posts=get_posts(null,$_GET['id']);

?>

<html>
<body>

<h1>raghavs blog</h1>

<center><h3>
<p>
<a href="blog/index.php">home</a>&nbsp&nbsp
<a href="blog/add_post.php">Add a post</a>&nbsp&nbsp
<a href="blog/add_category.php">Add a Category</a>&nbsp&nbsp
<a href="blog/category_list.php">Category list</a>&nbsp&nbsp
<a href="blog/output.php">see data</a>
</center></h3>

<?php
foreach($posts as $post){
  
?>
<h2><a href="blog/index.php?id=<?php echo $post['post_id'];?>"><?php echo $post['title'];?></a></h2>&nbsp
in<a href="blog/category.php?id=<?php echo $post['category_id'];?>"><?php echo $post['name'];?></a>
<p><?php echo nl2br($post['contents']);?></p>
<menu>
<ul>
  <li><a href="blog/delete_post.php?id=<?php echo $post['post_id'];?>">Delete this post</a></li>
   <li><a href="blog/edit_post.php?id=<?php echo $post['post_id'];?>">Edit this post</a></li>
</ul> 
</menu>
<?php
}?>  
</body>
</html>