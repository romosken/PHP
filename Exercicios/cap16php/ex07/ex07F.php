<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap 16 ex 07 formulário</title>
</head>

<body><center>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$idade=$_POST['idade'];
$sexo=$_POST['sexo'];

$array[0]=$nome;
$array[1]=$email;
$array[2]=$tel;
$array[3]=$idade;
$array[4]=$sexo;

echo'<pre>';
var_dump($array);
echo'</pre>';
?>
</center>
</body>
</html>