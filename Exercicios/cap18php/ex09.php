﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>Cap 18 ex 09</title>
</head>

<body><center>
<?php
$palavra=$_POST['palavra'];
$len= strlen($palavra)-1;
for ($a = 0; $a <= $len; $a++){
	echo $palavra [$a].'<br />';
	}


?></center>
</body>
</html>