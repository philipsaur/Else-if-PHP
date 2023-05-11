<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Servicio Militar</title>

</head>

<body>
<form class="" action="parametros.php" method="post">
<h2>Ingresa tus datos personales</h2>
    <input type="text" name="nombre" value="" placeholder="Ingresa tu nombre"><br>
    <h5>Ingrese fecha de nacimiento</h5>
    <input type="date" name="birth" value="" placeholder="Ingresa tu fecha de nacimiento"><br><br>
    <input type="text" name="genero" value="" placeholder="Ingresa tu genero">
    <button type="submit" name="button">Enviar</button>
</form>

<?php
$nombre = $_POST['nombre'];
$birth = $_POST['birth'];
$genero = $_POST['genero'];

$hoy = new DateTime();
$birth = new DateTime($birth);
$edad = $hoy ->diff($birth)->y;

if ($genero =='Masculino' && $edad >= 18 && $edad <=26) {
    $ingreso = 'Admitido';
    

}else {
    $ingreso = 'No admitido';
}

echo 'Aspirante llamado: '. $nombre .'<br>'; 
echo 'Edad del aspirante: '. $edad .'<br>';
echo 'Genero del aspirante: '. $genero .'<br>';
echo 'Estado del aspirante: '. $ingreso;




?>
 
</body>
</html>