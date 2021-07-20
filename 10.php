<?php include 'includes/header.php';

//Conectar a la BD con PDO
$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root', 'root');

$query = "SELECT titulo, imagen FROM propiedades";

$stmt = $db->prepare($query);

$stmt->execute();

$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC );

foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
endforeach;

include 'includes/footer.php';