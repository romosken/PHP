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
$B=$_GET['b'];
$C=$_GET['c'];
$D=$_GET['d'];
$N=$_GET['n'];

$VM=$A+$B+$C+$D; 

if(($VM >= 10000.00) and($VM<=50000.00)){
	print 'Parabéns, '  . $N . "!";
	
	} elseif (($VM>=50000.01)and ($VM<=75000.00)){
		print 'Sensacional, '. $N . "!";
		}elseif($VM>75000.00){
			print'Fantástico, '. $N . "!";
			}else{
				print 'Você não vendeu o valor suficiente, ' . $N . "!";
			}

?>
</center>
</body>
</html>