<!DOCTYPE html>
<html>
<meta http-equiv="Content-Security-Policy" content="default-src 'self'">

<body>
<?php
if($_POST['feedback'] != null){
$myfile = fopen("testfile.txt", "a");
fwrite($myfile, $_POST['feedback'] . "<hr/>\n");
fclose($myfile);

}
echo nl2br(file_get_contents('testfile.txt'));

?>

<form action="mashup5.php" method="post">
<textarea rows="10" cols="50" name="feedback">

</textarea>
<br/>
<input type="submit" value="Post"/>

</form>

</body>
</html>