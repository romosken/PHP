<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 6 Ex 8</title>
</head>

<body>
<center>
<?php
$Preco = $_GET['A']; 
$Desconto = 5;
$Porcentagem = 100; 
$VD = $Preco * $Desconto / $Porcentagem;
$VP = $Preco - $VD;
print  "O Valor do desconto é de: R$".$VD. "<br />"  ;
print  "O Valor do Produto com o desconto é de: R$".$VP  ;






?>
</center>
</body>
</html>