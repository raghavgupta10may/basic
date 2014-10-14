
<form method="post" action"">
<table border="1" width="30%">
<tr>
<td>TO:</td><td><input type="text" name="to" value="<?php echo $_REQUEST['emails'];?>"></td></tr>
<tr>
<td>SUBJECT:</td><td><input type="text" name="subject" size="40"></td></tr> 
<tr>
<td>MESSAGE:</td><td><textarea name="message" cols="30" rows="4"></textarea></td></tr>
</table>
<p><input type="submit" name="submit" value="send email">
</form>
<?php
if(isset($_REQUEST['submit']))
{
$to=$_REQUEST['to'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
$from ="myname@gamil.com";
$headers="from: $from";

if($to && $subject && $message)
{
mail($to,$subject,$message);
echo "your email has been sent";
header("refresh:3; url=update.php");

}else{ echo "Send message without text and body?";}
}
?>