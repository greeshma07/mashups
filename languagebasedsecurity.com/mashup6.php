<!DOCTYPE html>
<html>
<head>

<style>
div.fixed {
    position: fixed;
    top: 0;
    right: 0;
    
}


</style>

</head>
<body>

<table><tr><td>

<div id="signUp">
<object type="text/html" data="http://greeshma07.github.io" height="300" width="800"></object></div>
</div></td>
<td>
<div id="register">
<object type="text/html" data="reg.html" height="300" width="800"></object></div>
</div></td>

</tr>
</table>
<div><b> Your feedback is highly appreciated</b></div>
<div id="fd" height="300" width="400">
<?php
if($_POST['feedback'] != null){
$myfile = fopen("testfile.txt", "a");
fwrite($myfile, $_POST['feedback'] . "<hr/>\n");
fclose($myfile);

}
echo nl2br(file_get_contents('testfile.txt'));

?>

<form action="mashup6.php" method="post">
<textarea rows="10" cols="50" name="feedback">

</textarea>
<br/>
<input type="submit" id="btn" value="Post"/>

</form>

 </div>

</body>
</html>
