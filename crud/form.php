<html>
<head>
<title>form</title>

</head>
<body>
<h1> Register Form</h1>
<form enctype="multipart/form-data" method="post" action="insert.php">

Name:<input type="text" name="name" id="name" onkeyup="register()"/><br/>
Email:<input type="text" name="email" id="email" onkeyup="register()" /><br/>
Password:<input type="password" name="password" id="password" onkeyup="register()"/><br/>  
<p>
<input type="submit" name="submit" value="submit"/>
 <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
Choose your picture:<input type="file" name="upload">
</form>
<p>
<h3><center>
<?php include("links.php");?>
</center></h3>


</body>

</html>