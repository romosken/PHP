<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 10 ex 13</title>
</head>

<body>
<center>
<?php
$a=$_GET['a'];
$s=$_GET['s'];
if($s='H'){
	print "Seu peso ideal é: " . 72.7 * $a - 58;
}
else{
	print 'Seu peso ideal é: '. 62.1 * $a - 44.7;
	}


?>
</center>
</body>
</html>