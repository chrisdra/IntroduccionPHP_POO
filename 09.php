<?php include 'includes/header.php';

//Conectar a la BD con MySQLi
$db = new mysqli('localhost', 'root', 'root', 'bienes_raices');

//Creamos el quey
$query = "SELECT titulo FROM propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Creamos la variable
$stmt->bind_result($titulo, $imagen);

//imprimir el resultado
while($stmt->fetch()):
    var_dump($titulo);
endwhile;

include 'includes/footer.php';