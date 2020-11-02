<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 5 ex 19</title>
</head>


<center>
<h1>Capítulo 5 exercício 19</h1>
<?php
$v1 = 10;
$v2 = 16;
$v3 = 22;
$v4 = 0.3;
$v5 = 0.45;
$porcentagemC = $v1 * $v4;
$Paocaseiro = $porcentagemC * $v5 + $v1;
$porcentagemI = $v2 * $v4;
$Paoitalia = $porcentagemI * $v5 + $v2;
$porcentagemS = $v3 * $v4;
$Paosovado = $porcentagemS * $v5 + $v3;
print "O Pão Caseiro agora custará: R$" . number_format($Paocaseiro,2,",",".") . "<br />";
print "O Pão Italiano agora custará: R$" . number_format($Paoitalia,2,",",".") . "<br />";
print "O Pão Sovado agora custará: R$" .number_format($Paosovado,2,",",".")
?>
</center>
</font>
</body>
</html>	