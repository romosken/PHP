<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap8 ex7</title>
</head>

<body><center>
<?php
$V[0]=$_GET["0"];
$V[1]= $_GET["1"];
$C= $_GET['c'];
$Frase= implode($C,$V);
print $Frase;


?>

</center>
</body>
</html>