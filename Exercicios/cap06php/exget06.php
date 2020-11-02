<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 6 Ex 6</title>
</head>

<body>
<center>
<?php
$v1 = $_GET['A']; 
$v2 = $_GET['B'];
$v3 = "";
print "Valor de A = " . $v1. " Valor de B = " . $v2 ."<br />";
$v3=$v1;
$v1=$v2;
$v2=$v3;
print "Valor de A = " . $v1. " Valor de B = " . $v2 ."<br />";






?>
</center>
</body>
</html>