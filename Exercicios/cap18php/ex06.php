<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 18 ex 06</title>
</head>

<body><center>
<?php
$p1=$_POST['1'];
$p2=$_POST['2'];
$p3=$_POST['3'];
$p4=$_POST['4'];
$len= strlen($p1);
$len2= strlen($p2);
$len3= strlen($p3);
$len4= strlen($p4);
 if(($len>$len2) and($len>$len3)and($len>$len4)){
	 echo 'A maior palavra é: '.$p1.'<br />';
	 }
	 if(($len2>$len) and($len2>$len3)and($len2>$len4)){
	 echo 'A maior palavra é: '.$p2.'<br />';
	 }
if(($len3>$len2) and($len3>$len)and($len3>$len4)){
	 echo 'A maior palavra é: '.$p3.'<br />';
	 }
if(($len4>$len2) and($len4>$len3)and($len4>$len)){
	 echo 'A maior palavra é: '.$p4.'<br />';
	 }if(($len==$len2) and($len==$len3)and($len==$len4)){
	 echo 'Todas as palavras tem o mesmo tamanho';
	 }


?></center>
</body>
</html>