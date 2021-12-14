
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible"
    content="IE=edge">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>

<body>
  <fieldset>

    <legend>
    <h1>CALCULADORA</h1>
    </legend> 
    
    Enunciados: <a href="tablas.php">Tabla de Multiplicacion </a> || <a href="calculateS.php">Ir a calculadora de salario</a>
    <ul>
      <li>
        Realizar una calculadora utilizando un Form y pasandole los datos por medio de $_POST
      </li>
    </ul>

  <form action="calculate.php"
    method="POST">
    <h5>Ingrese dos números:</h5>
    <label for="n1">Ingrese un número:</label>
    <input type="number"
      name="n1"
      id="n1">
    <br>
    <label for="n2">Ingrese un número:</label>
    <input type="number"
      name="n2"
      id="n2">
    <br>
    <h5>Seleccionar operacion</h5>
    ➕ <input type="radio"
      name="op"
      value="S">
    | ➖ <input type="radio"
      name="op"
      value="R">
    | ✖ <input type="radio"
      name="op"
      value="M">
    | ➗ <input type="radio"
      name="op"
      value="D">
    <br>
    <button>
      Ralizar operación
    </button>
  </form>
</fieldset>

</P>

<fieldset>
<legend>

  <h1>RECOLECTANDO DATOS</h1>
  </legend>
  
  <?php
$n1 = $_REQUEST['n1'];
$n2 = $_REQUEST['n2'];
$opcion = $_REQUEST['op'];

switch($opcion){
    case 'S': echo"El valor de la suma es: " . ($n1 + $n2);
        break;
    case 'R': echo"El valor de la resta es: " . ($n1 - $n2);
        break;
    case 'M': echo"El producto es: " . ($n1 * $n2);
        break;
    case 'D': echo"El valor de la división es: " . ($n1 / $n2);
        break;
    default: echo"Esa opción no se encuentra disponible";
        break;
}
?>
</fieldset>

</body>

</html>