<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>If y Switch</title>
        <link rel="stylesheet" href="style.css">

</head>
<body>
<form class="" action="333.php" method="post">
<h1>If else If else #1</h1>
<h2></h2>
<h5>Validacion disponibilidad del color</h5>
    <input type="text" name="color" value="" placeholder="(Verde / Rojo / Gris) ">
    <button type="submit" class="btn" name="button">Enviar</button><br>
</form>
<?php
$color = $_POST['color'];

if ($color == "Rojo" || $color == "rojo" ) {
  echo "En el momento hay 5 unidades en el color Rojo";
} elseif ($color == "Verde"||$color == "Verde") {
  echo "En el momento hay 3 unidades en el color Verde";
} elseif ($color == "Gris"||$color == "gris") {
  echo "En el momento no hay unidades en el color Gris";
} else {
  echo "Porfavor, digite un color valido";
}
?>
<body>
<form class="" action="333.php" method="post">
<h1>Switch #1</h1>
<h2></h2>
<h5>Validacion disponibilidad de cantidad</h5>
    <input type="text" name="cantidad" value="" placeholder="(Verde / Rojo / Gris) ">
    <button type="submit" class="btn" name="button">Enviar</button><br></form>
<?php
$cantidad = $_POST['cantidad'];

switch ($cantidad) {
  case "Rojo":
    echo "Hay 5 unidades en el color Rojo";
    break;
  case "Verde":
    echo "Hay 3 unidades en el color Verde";
    break;
  case "Gris":
    echo "No hay unidades de color Gris";
    break;
  case "rojo":
    echo "Hay 5 unidades en el color Rojo";
    break;
  case "verde":
    echo "Hay 3 unidades en el color Verde";
    break; 
case "gris":
    echo "No hay unidades de color Gris";
    break;     
  default:
    echo "Elige una opcion valida";
}
?>
<form class="" action="333.php" method="post">
<h1>If else If else #2</h1>
<h2></h2>
<h5>Cantidades disponibles</h5>
    <input type="number" name="numero" value="" placeholder="(Digita la cantidad que necesitas) ">
    <button type="submit" class="btn" name="button">Enviar</button><br>
</form>
<?php
$numero = $_POST['numero'];

if ($numero == "1" || $numero == "2" || $numero == "3") {
  echo "En el momento los Rojos y las Verdes tienen disponibilidad de ".$numero;
} elseif ($numero == "4"||$numero == "5") {
  echo "En el momento solo las Rojas tienen ".$numero;
} elseif ($numero > "6") {
  echo "En el momento no hay unidades con esa cantidad";
} else {
  echo "El producto no esta disponible";
}
?>
<body>
<form class="" action="333.php" method="post">
<h1>Switch #2</h1>
<h2></h2>
<h5>Posibles solicitudes</h5>
    <input type="number" name="numero" value="" placeholder="(Digita la cantidad que necesitas) ">
    <button type="submit" class="btn" name="button">Enviar</button><br></form>
<?php
$numero = $_POST['numero'];

switch ($numero) {
  case "1":
    echo "Hay disponibilidad en Verde y Rojo de ".$numero;
    break;
  case "2":
    echo "Hay disponibilidad en Verde y Rojo de ".$numero;
    break;
  case "3":
    echo "Hay disponibilidad en Verde y Rojo de".$numero;
    break;
  case "4":
    echo "Hay disponibilidad en Rojo de " .$numero;
    break;
  case "5":
    echo "Hay disponibilidad en Rojo de ".$numero;
    break;
  default:
    echo "Elige una opcion valida o con la cantidad requerida";
}
?>
</body>
</html>