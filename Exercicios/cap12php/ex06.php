<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 12 ex 06</title>
</head>

<body>
<center>
<?php
$pe=$_GET['a'];
$cp=$_GET['b'];
$n=is_numeric($pe); 
$d;
$a;
$pt;
if($n==true){
echo 'O valor na etiqueta do produto é: R$'.number_format($pe,2,',','.').'<br />';}
else{
	echo 'Houve algum erro, tente novamente!<br />
';}

if($cp==1){
	$d=$pe*0.1;
	$a=0;
	$pt=$pe-$d+$a;
	echo 'O produto pago à vista em dinheiro ou cheque, custa: R$'  . number_format($pt,2,',','.') ;
	
	} 
	elseif ($cp==2){
		$d=$pe*0.05;
		$a=0;
		$pt=$pe-$d+$a;
		echo 'O produto pago à vista em cartão de crédito, custa: R$'  . number_format($pt,2,',','.') ;
		}
		elseif($cp==3){
			$d=0;
			$a=0;
			$pt=$pe-$d+$a;
			echo'O produto pago em 2 vezes, sem juros, custa: R$'  . number_format($pt,2,',','.') ;
			}
			elseif($cp==4){
				$d=0;
				$a=$pe*0.1;
				$pt=$pe-$d+$a;
				echo 'O produto pago em 3 vezes, com 10% de acréscimo, custa: R$'  . number_format($pt,2,',','.') ;
			}
			else{
				echo 'Houve algum erro, tente novamente!';}

?>
</center>
</body>
</html>