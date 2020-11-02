<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 7 Ex 4</title>
</head>

<body>
<center>
<?php
date_default_timezone_set(America/Sao_Paulo);
$ap= $_GET['A'];
$aa=date("Y");
$a= $aa-$ap;
print "A publicação ocorreu a: ".$a." anos"
?>
</center>
</body>
</html>