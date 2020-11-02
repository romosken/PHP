<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 12 ex 07</title>
</head>

<body>
<center>
<?php
$m=$_GET['a'];

if(($m >= 1) and($m<=3)){
	echo 'É Verão!';
	} elseif(($m > 3) and($m<=6)){
		echo 'É Outono!';
		}elseif(($m >= 7) and($m<=9)){
			echo 'É Inverno!';
			}elseif(($m >= 10) and($m<=12)){
			echo 'É Primavera!';	
			}else{
				echo 'Mês incorreto!';
			}

?>
</center>
</body>
</html>