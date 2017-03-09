<!DOCTYPE html>
<html>
<?php
header('X-FRAME-OPTIONS: DENY',TRUE);
?>


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
<iframe height="400" width="500" src="mashup5.php"></iframe>

<tr>

<td><iframe height="700" width="500" src="mashup2.html"></iframe></td>


<td><iframe height="400" width="700" src="" name="iframe1" sandbox=""></iframe></td>


<td><iframe height="200" width="400" src="reg.html" sandbox="allow-same-origin allow-forms"></iframe></td>


<script type = text/javascript>
window.frames["iframe1"].location = "http://greeshma07.github.io"
</script>
</tr>

</body>
</html>