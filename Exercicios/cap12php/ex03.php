<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 12 ex 03</title>
</head>

<body>
<center>
<?php
$A=$_GET['a'];
$N= is_numeric($A);
$dois= $A*0.02;
$cinco=$A*0.05;
$sete=$A*0.07;
$dez=$A*0.1;

if($N==true){
	echo 'Seu total de compras é: '.number_format($A,2,',','.').'<br />' ;
	}else{echo 'Por Favor insira somente um valor numérico!';
	}
 

if(($N==true)and($A >= 200.00) and($A<=450.00)){
	echo 'Com o seu desconto de 2%, você deverá pagar agora: '. number_format($A-$dois,2,',','.');
}elseif(($N==true)and($A >= 451.00) and($A<=550.00)){
	echo 'Com o seu desconto de 5%, você deverá pagar agora: '. number_format($A-$cinco,2,',','.');
	}elseif(($N==true)and($A >= 551.00) and($A<=750.00)){
	echo 'Com o seu desconto de 7%, você deverá pagar agora: '. number_format($A-$sete,2,',','.');
	}elseif(($N==true)and($A > 750.00)){
	echo 'Com o seu desconto de 10%, você deverá pagar agora: '. number_format($A-$dez,2,',','.');}elseif(($N==true)and($A < 200.00)){
		echo 'Você não possui direito a nenhum desconto!';}
?>
</center>
</body>
</html>