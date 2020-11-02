<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 18 ex 06</title>
</head>

<body><center>

<form name='Formulário' action="ex06.php" method="post"/>
<?php for($a=1;$a<=4;$a++){
	echo "<label>Palavra ".$a.": </label><input type='text' name=".$a." placeholder='".$a."° Palavra'  /><br/><br/>";
	} ?>
<button type='submit'>Enviar</button>
</center>
</body>
</html>