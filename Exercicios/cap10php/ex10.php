<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 10 ex 20</title>
</head>

<body>
<center>
<?php
$n1=$_GET['1'];
$n2=$_GET['2'];
$nu1= is_numeric($n1).is_numeric($n2);
if($nu1==true){
	print $n1+$n2;
}else{
	print "Valor Inválido!";
	}


?>
</center>
</body>
</html>