<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 11 ex 02</title>
</head>

<body>
<center>
<?php
$S=$_GET['s'];
$v=strlen($S);
if($v<6){
	print"senha fraca";
}elseif($v==6){
	print'senha boa';
	}elseif($v>6){
	print'Senha excelente!';
	}
	


?>
</center>
</body>
</html>