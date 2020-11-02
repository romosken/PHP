<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 11 ex 04</title>
</head>

<body>
<center>
<?php
$v1=$_GET['1'];
$l1=$_GET['l1'];
$v2=$_GET['2'];
$l2=$_GET['l2'];
if($v1==$v2){
	print 'Ambos venderam a mesma quantia de produtos!';
}elseif($v1<$v2){
	print $l2 . ' Vendeu mais!!';
	}else{
	print $l1.' Vendeu mais!!';
	}	
	
	


?>
</center>
</body>
</html>