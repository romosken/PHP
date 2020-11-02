<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 18 ex 08</title>
</head>

<body><center>
<?php
$n1=$_POST['1'];
$n2=$_POST['2'];
$n3=$_POST['3'];
$n4=$_POST['4'];

$media = ($n1 + $n2 + $n3 + $n4) / 4;
echo "1° Nota: ".$n1."<br />2° Nota: ".$n2."<br />3° Nota: ".$n3."<br />4° Nota: ".$n4."<br />Sua Média é: ".$media;
if($media >= 7 ){
	echo "<br />Você está aprovado!";
	}
if(($media >= 5) and ( $media < 7) ){
	echo "<br />Você está de recuperação!";
	}
if($media < 5  ){
	echo "<br />Você está reprovado!";
	}
?></center>
</body>
</html>