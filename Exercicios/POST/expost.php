<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulário</title>
<style>
*{
	font-family:"MS Serif", "New York", serif;
	}
	p{
		
		font-size:14px;}

</style>
</head>

<body bgcolor="#9999FF"><center>
<font color="#FF0033"><h2>Insira as informações, e envie!</h2>
</font>
<br />
<br />
<p><font color="#cc0000">
<form name='formulário' action="exform.php" method="post">
<label>Nome:  </label>
<input type='text' name='nome' placeholder="Insira seu nome" required="required"/>
<br />
<br />
<label> E-mail:</label>
 <input type="email" name='email' placeholder="Insira seu e-mail " required="required"/>
<br />
<br />
<label>Telefone:</label> 
<input type="tel" name='tel' placeholder="Insira seu telefone" required="required"/>
<br />
<br />
<label>Idade:</label>
<input type="text" name='idade' placeholder="Insira a sua idade" required="required"/>
<br />
<br /><label>Sexo:</label>
<input type="text" name='sexo' placeholder="Insira o sexo" required="required"/>
<br />
<br />
<label>Mensagem:</label>
<textarea name="msg" placeholder="deixe uma mensagem"></textarea>
<br />
<br /><br />

<label>V1:</label>
<input type='number' name='V1' placeholder="Insira o primeiro valor" required="required"/>
<br /><br />
<label>V2:</label>
<input type="number" name='V2' placeholder="Insira o segundo valor" required="required"/>
<br />
<br />
<select name='operacao'>
<option value='1'>Soma</option>
<option value='2'>Subtração</option>
<option value='3'>Multiplicação</option>
<option value='4'>Divisão</option><br />
</select><br /><br /><br />

<button type="submit" class="d" >Enviar</button>


</form></font></p>
</center>
</body>
</html>