<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 16 ex 08 formulário</title>
</head>

<body><center>
<?php
$V1=$_POST['V1'];
$V2=$_POST['V2'];
$V3=$_POST['V3'];
$V4=$_POST['V4'];

$a[0]=$V1;
$a[1]=$V2;
$a[2]=$V3;
$a[3]=$V4;

$total1=$a[0]+$a[1];
$total2=$a[2]-$a[3];

echo $total1.'<br />'.$total2;


?>
</center>
</body>
</html>