<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>Cap 18 ex 10</title>
</head>

<body><center>
<?php
$numero=$_POST['numero'];
$sinal;
if($numero<0){
	for ($a = 0; $a >= $numero; $a--){
	echo $a .'<br />';
	}
	}else{
		for ($a = 0; $a <= $numero; $a++){
	echo $a .'<br />';
	}
		
		}


?></center>
</body>
</html>