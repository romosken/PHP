<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 12 ex 01</title>
</head>

<body>
<center>
<?php
$A=$_GET['a'];
$B=$_GET['b'];


if($A != $B){
$D = $A - $B;
if ($D < 0){
$D= $D* -1;
}
print 'A diferença é de : '.$D;
}else{
	print'Números iguais<br />'. 'O resultado da soma é : '. ($A+$B);}
?>
</center>
</body>
</html>