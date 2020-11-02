<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 6 Ex 11</title>
</head>

<body>
<center>
<?php
$C = $_GET['A']; 
$Km = $_GET['B'];
$CS = $_GET['C']; 
$CG = $C-$CS;
$KmporL = $CG/$Km;
print  "O Veículo gasta: ".$KmporL. " Litros de combustível por quilômetro"  ;






?>
</center>
</body>
</html>