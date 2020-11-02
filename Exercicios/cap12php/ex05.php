<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 12 ex 05</title>
</head>

<body>
<center>
<?php
$ht=$_GET['a'];
$vh=$_GET['b'];
$sb=$ht*$vh;
$inss=$sb*0.11;
$ali=$sb-$inss;
echo 'Seu salário bruto é de: R$'  . number_format($sb,2,',','.') . "!<br />";

if($ali<= 1680.00){
	$sl=$ali;
	echo 'Seu salário líquido é de: R$'  . number_format($sl,2,',','.') . "!";
	} elseif (($ali>= 1680.01) and($ali<=2985.00)){
	$ir=$ali*0.15;
	$sl=$ali-$ir;
	echo 'Seu salário líquido é de: R$'  . number_format($sl,2,',','.') . "!";
		}elseif(($ali>= 2985.01) and($ali<=3826.00)){
	$ir=$ali*0.19;
	$sl=$ali-$ir;
	echo 'Seu salário líquido é de: R$'  . number_format($sl,2,',','.') . "!";
			}elseif($ali>= 3826.01){
	$ir=$ali*0.22;
	$sl=$ali-$ir;
	echo 'Seu salário líquido é de: R$'  . number_format($sl,2,',','.') . "!";
	}
	?>
</center>
</body>
</html>