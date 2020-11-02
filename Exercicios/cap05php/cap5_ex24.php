<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 5 ex 24</title>
</head>


<center>
<h1>Capítulo 5 exercício 24</h1>
<?php
$kgpormes = 19 ;
$precoporkg = 21.35;
$mesesparaabate = 18;
$animais = 29;
$precokgmes = $kgpormes*$precoporkg ;
$precoporanimal= $precokgmes*$mesesparaabate;
$precotodos = $precoporanimal*$animais;
print "Jair gastará por animal: R$ " .number_format($precoporanimal,2,",",".") . " <br />";
print "Jair gastará em todos os animais: R$ " .number_format($precotodos,2,",",".") ;
?>
</center>
</font>
</body>
</html>	