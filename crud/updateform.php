<html>
<head>
</head>
<body>
<h3>Edit User:"<?php echo $_REQUEST['names'];?>"</h3>
<form ENCTYPE="multipart/form-data" method="post" action="change.php">
<table border="1" width="60%">
<tr><td width="30%">NAME:</td><td><input type="text" name="newname"
value="<?php echo $_REQUEST['names'];?>"/></td></tr>
<tr><td width="30%">EMAIL:</td><td><input type="text" name="newemail"
value="<?php echo $_REQUEST['emails'];?>"/></td></tr>
<tr><td width="30%">PASSWORD:</td><td><input type="text" name="newpassword"
value="<?php echo $_REQUEST['passwords'];?>"/></td></tr>
</table>
<p>
Change your Picture:<input type="file" name="newupload"/>
<input type="submit" name="submit" value="save&update"/>
<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>"/>

 <?phpinclude("links.php");
?>
</form>
</body>
</html>