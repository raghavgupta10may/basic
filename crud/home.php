<html>
<head>

</head>
<body>
<h1><center><b><i>Welcome to CRUD</i></b></center></h1>
<center><h3> Please login...</h3></center>
<div align="center">
<form method="post" action="login.php">
Name:<input type="text" name="name" id="name" onkeyup="register()"/><br/>
Password:<input type="password" name="password" id="password" onkeyup="register()"/><br/>  
<p>
<input type="submit" name="submit" value="login"/>
 <p>
 <a href="form.php">Sign up</a><p>
 </div>

<?php include("links.php");?>

</body>

</html>
