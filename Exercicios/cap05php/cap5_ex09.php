<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 5 ex 9</title>
</head>


<center>
<h1>Capítulo 5 exercício 9</h1>
<?php
$v1 = 150.00;
$v2 = 12;
$porcentagem = $v1 * $v2 / 100;
$valorpago = $v1 - $porcentagem ;
print "O cliente pagou " . "R$" .number_format( $valorpago, 2) . "<br />";
?>
</center>
</font>
</body>
</html>	