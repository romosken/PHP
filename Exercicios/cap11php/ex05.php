<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cap 11 ex 05</title>
</head>

<body>
<center>
<?php
$Beto=$_GET['b'];
$Jonas=$_GET['j'];
$Marcio=$_GET['m'];

if(($Beto>$Jonas) and ($Beto>$Marcio) and ($Marcio>$Jonas)){
print 'Beto é o mais velho, Marcio o do meio, e Jonas o caçula';
	}elseif (($Jonas>$Beto) and ($Jonas>$Marcio) and ($Marcio>$Beto)){
		print 'Jonas é o mais velho, Marcio o do meio, e Beto o caçula';
		}elseif(($Beto>$Jonas) and ($Beto>$Marcio) and ($Marcio<$Jonas)){
			print 'Beto é o mais velho, Jonas o do meio, e Marcio o caçula';
			}elseif(($Jonas>$Beto) and ($Jonas>$Marcio) and ($Marcio<$Beto)){
			print 'Jonas é o mais velho, Beto o do meio, e Marcio o caçula';
			}elseif(($Marcio>$Jonas) and ($Marcio>$Beto) and ($Beto>$Jonas)){
				print 'Marcio é o mais velho, Beto o do meio, e Jonas o caçula';
				}elseif(($Marcio>$Jonas) and ($Marcio>$Beto) and ($Beto<$Jonas)){
				print 'Marcio é o mais velho, Joonas o do meio, e Beto o caçula';
				} else{}

?>
</center>
</body>
</html>