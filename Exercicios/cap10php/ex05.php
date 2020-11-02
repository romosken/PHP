<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 10 ex 05</title>
</head>

<body>
<center>
<?php
$E=$_GET['e'];
$r=stripos($E,"@");
if($r==true ){
	print "email válido";
}else{print 'email inválido';}
?>
</center>
</body>
</html>