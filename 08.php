<?php include 'includes/header.php';

//Incluir las otras clases

// require 'clases/Cliente.php';
// require 'clases/Detalles.php';

function mi_autoload($clase) {
    require __DIR__ . '/clases/' . $clase . '.php';
}

spl_autoload_register('mi_autoload');

$detalles = new Detalles();
echo "<hr>";
$cliente = new Cliente();


include 'includes/footer.php';
