<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 11 Ex 01</title>
</head>

<body>
<center>
<?php
$G= $_GET['g'];
$res="";

if($G == 'H'){
	$res="Olá amigo!";
}elseif($G=='M'){
		$res="Olá amiga";
		}
		else{
		$res="Olá amigx";
		}
print $res

?>
</center>
</body>
</html>