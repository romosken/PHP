<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 18 ex 06</title>
</head>

<body><center>
<?php
$salario1=$_POST['salario'];
for($a=1;$a<=12;$a++){
	echo "{$a}°Mês: R$". number_format($salario1,2,',','.'). '<br />';
	}
	$por1= $salario1 * 0.03;
	$salario2 = $salario1 + $por1;
	
	for($a=13;$a<=24;$a++){
	echo "{$a}°Mês: R$". number_format($salario2,2,',','.'). '<br />';
	}
	$por2= $salario2 * 0.03;
	$salario3 = $salario2 + $por2;
	
	for($a=25;$a<=36;$a++){
	echo "{$a}°Mês: R$". number_format($salario3,2,',','.'). '<br />';
	}
	$por3= $salario3 * 0.03;
	$salario4 = $salario3 + $por3;
	
	for($a=37;$a<=48;$a++){
	echo "{$a}°Mês: R$". number_format($salario4,2,',','.'). '<br />';
	}
	$por4= $salario4 * 0.03;
	$salario5 = $salario4 + $por4;

	for($a=49;$a<=60;$a++){
	echo "{$a}°Mês: R$". number_format($salario5,2,',','.'). '<br />';
	}
	$por5= $salario5 * 0.03;
	$salario6 = $salario5 + $por5;


?></center>
</body>
</html>