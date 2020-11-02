<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recebido do formulário</title>
<style>*{
	font-family:"MS Serif", "New York", serif;
	font-size:20px;
	
	
	}
    </style>
</head>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$idade=$_POST['idade'];
$sexo=$_POST['sexo'];
$msg=$_POST['msg'];
$V1 =$_POST['V1'];
$V2 =$_POST['V2'];
$OP=$_POST['operacao'];
$total;
if($OP== 1){
	$total=$V1+$V2;}
	elseif($OP==2){
		$total=$V1-$V2;}
		elseif($OP==3){$total= $V1*$V2;}
		elseif($OP==4) {$total= $V1/$V2;}
?>
<body bgcolor="#9999FF">
<center><font color="#CC0000">
	<?php echo 'Nome: '.$nome .'<br /><br />';
	echo 'E-mail: '.$email .'<br /><br />';
	echo 'Telefone: '.$tel. '<br /><br />';
	echo 'Idade: '.$idade .' anos<br /><br />';
	echo 'Sexo: '.$sexo .'<br /><br />';
	echo 'Mensagem: '.$msg .'<br /><br />';
	 echo'O resultado da operação é: '. $total;?></font>
</center>
</body>
</html>