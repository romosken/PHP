<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 5 ex 20</title>
</head>


<center>
<h1>Capítulo 5 exercício 20</h1>
<?php
$v1 = 10000;
$v2 = 18000;
$v3 = 6000;
$dollar = 3.25;
$euro = 4.35;
$rupia = 0.047;
$EUA = $v1 / $dollar;
$Ale = $v2 / $euro;
$Ind = $v3 / $rupia;
print "Ele gastará nos EUA: US$ " .number_format($EUA,2,",",".") . " <br />";
print "Ele gastará na Alemanha: €$ " .number_format($Ale,2,",",".") . " <br />";
print "Ele gastará na Índia: INR$ " .number_format($Ind,2,",",".") ;
?>
</center>
</font>
</body>
</html>	