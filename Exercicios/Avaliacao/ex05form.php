<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ex 05 formulário Avaliação</title>

</head>

<body><center>
<form name="formulário ex 05" action="ex05.php" method="post">
Número 1:
<input type="number" name="num1" id="num1"/><br />
<br />
Número 2:  
<input type="number" name="num2" id="num2"/><br />
<br />

 <select name="Operacao" id="Operacao"  >
      <option value="M">Multiplicação</option>
      <option value="D">Divisão</option>
    </select>
    <br />
   <br />

  <input type="submit" name="enviar" id="enviar" value="Enviar" />
</form></center>
</body>
</html>