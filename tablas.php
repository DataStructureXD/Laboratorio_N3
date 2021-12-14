<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de multiplicacion</title>
  <link rel="stylesheet" href="style.css"> 
</head>
<body>
  
  <fieldset>
  <legend>
  <h1>
      Laboratorio N~3
    </h1>
    </legend>
  
  <ol>
    <h3>
      Enunciados: <a href="calculate.php">Volver</a> || <a href="calculateS.php">Ir a calculadora de salario</a>
    </h3>
    <li> Hacer un programa que imprima las tabla de multiplicar del 1 al 12. utilizando las
      sentencias de
      repetivas (for y Do-while). Cree una hoja de estilo con la siguiente información.
    </li>
  </ol>
  <br>
  
<?php 

$multiplicando;
$multiplicador;

echo "<table text-align:center; border=5>";
echo "<tr>";
	for ($tabla=1; $tabla<=12  ; $tabla++) { 
		echo "<td>Tabla del $tabla </td>";
	}

	echo "</tr>";
	echo "<tr>";

for ($multiplicador=1; $multiplicador <=12 ; $multiplicador++) { 
for ($multiplicando=01; $multiplicando <=12 ; $multiplicando++) { 
	echo "<td>$multiplicando X $multiplicador =";
	echo ($multiplicando *$multiplicador);
	echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";

 ?>
  </fieldset>
</body>
</html>