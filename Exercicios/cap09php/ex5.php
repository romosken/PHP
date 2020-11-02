<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 9 ex 5</title>
</head>

<body>
<center>
<?php
$N=$_GET['n'];
$r=is_numeric($N);
if($r == true ){
	print "Essa informação é numérica";
}
if($r == false ){
	print "Essa informação é textual";
}

?>
</center>
</body>
</html>