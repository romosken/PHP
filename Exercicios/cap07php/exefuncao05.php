<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 7 Ex 5</title>
</head>

<body>
<center>
<?php
$HE= $_GET['a'];
$ME= $_GET['b'];
$HS= $_GET['c'];
$MS= $_GET['d'];

$H1= $HS-$HE ;
$M1=$MS-$ME ;

$PPH=10;
$PPM=10/60;

$PH=$PPH*$H1;
$PM=$PPM*$M1;

$PT=$PH+$PM;

print "Você deverá pagar: R$". number_format($PT,2,",",".");

?>
</center>
</body>
</html>