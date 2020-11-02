<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 16 ex 06</title>
</head>

<body><center>
<?php
 $v[0][0] = "S";
    $v[0][1] = "E";
    $v[1][0] = 45;
    $v[1][1] = "K";
    $v[2][0] = "J";
	
	$v[1][0]='Q';
	unset($v[2][0]);

echo'<pre>';
var_dump($v);
echo'</pre>';


?></center>
</body>
</html>