<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 12 ex 04</title>
</head>

<body>
<center>
<?php
$A=$_GET['a'];
$N= is_numeric($A);
if($N==true){
	}else{echo 'Por Favor insira somente um valor numérico!';
	}

if(($N==true)and($A >= 5) and($A<=7)){
	echo 'Você está na categoria: Infantil A!';
	
	} elseif (($N==true)and($A >= 8) and($A<=10)){
	echo 'Você está na categoria: Infantil B!';
		}elseif(($N==true)and($A >= 11) and($A<=13)){
	echo 'Você está na categoria: Juvenil A!';
			}elseif(($N==true)and($A >= 14) and($A<=17)){
	echo 'Você está na categoria: Juvenil B!';
			}elseif(($N==true)and($A >=18)){
	echo 'Você está na categoria: Adulto!';}
	elseif(($N==true)and($A <5) ){
	echo 'Você não possui idade suficiente para entrar em uma categoria!';}

?>
</center>
</body>
</html>