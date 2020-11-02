<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 11 ex 03</title>
</head>

<body>
<center>
<?php
$v1=$_GET['1'];
$v2=$_GET['2'];
$l=$_GET['l'];
$resp='';
$respt='';
if($l=='D'){
	$respt='O resultado da Divisão entre ' .$v1. ' e ' .$v2. ' é: ';
	$resp=$v1/$v2;	
}elseif($l=='M'){
	$respt= 'O resultado da multiplicação entre ' .$v1. ' e ' .$v2. ' é: ';
	$resp=$v1*$v2;
	}elseif($l=='A'){
	$respt= 'O resultado da Soma entre ' .$v1. ' e ' .$v2. ' é: ';
	$resp=$v1+$v2;
	}elseif($l=='S'){
	$respt= 'O resultado da Subtração entre ' .$v1. ' e ' .$v2. ' é: ';
	$resp=$v1-$v2;
	}else{
	$respt= 'Cálculo desconhecido';	
	$resp='';
	}
	

print $respt.$resp;
?>
</center>
</body>
</html>