<?php
include_once("init.php");
?>
<html>
<body>
<h1>category list</h1>
<?php
foreach(get_categories() as $category){?>
<p><a href="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name'];?></a>-
<a href = "delete_category.php?id=<?php echo $category['id'];?>">delete</a></p>;
<?php
}
?>
</body>
</html>