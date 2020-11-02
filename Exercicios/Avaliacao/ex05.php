<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ex 05 Avaliação</title>
</head>

<body><center>
<?php



$a=$_POST['num1'];
$b=$_POST['num2'];
$o=$_POST['Operacao']; 

if ($o=='M'){
	$result=$a*$b;
	}elseif($o=='D'){
		$result=$a/$b;
		}
		echo 'O resultado da operação é: '.$result
?></center>
</body>
</html>