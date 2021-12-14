<html>

<head>
  <meta charset="UTF-8">
  <title>Laboratorio N`3</title>
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
      Enunciados: <a href="calculate.php">Volver</a> || <a href="tablas.php">Ir a calculadora de salario</a>
    </h3>
    <li>Calcule el salario semanal de un trabajador, a partir de las horas trabajadas
      y el precio cobrado por hora. Ambos valores se asignaran de forma fija en el programa.
      La jornada normal es de 40 horas semanales. Las horas extra se pagan un cincuenta por ciento
      más caras que las normales,
      y pasan a pagarse al doble que las normales a partir de las 50 horas trabajadas.
    </li>
  </ol>
  <br>
  <form action="calculateS.php"
    method="PST">
    <label for="horas">
      Ingrese el total de horas trabajadas entre semana:
    </label>
    <input type="number"
      id="horas"
      name="horas">
    <br>
    <button>
      Calcular sueldo semanal
    </button>
  </form>
</fieldset>

<fieldset>
  <legend>
    <h1>Datos enviados</h1>
  </legend>
  <?php
$horas = $_REQUEST['horas'];
$horasNormales = 0;
$horasExtras = 0;

if($horas < 41 && $horas > 0){
    $horasNormales = 3.75 * $horas;
}else{
    $horasExtras = ($horas - 40) * 5;
    $horasNormales = 40 * 3.75;
}

echo"<h1>Pago semanal</h1>";
echo"Pago de Horas Normales: $ $horasNormales <br>";
echo"Pago de Horas Extras: $ $horasExtras <br>";
echo"Sueldo total: $" . ($horasNormales + $horasExtras);
?>

</fieldset>




</body>

</html>