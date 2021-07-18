<?php include 'includes/header.php';

// require 'clases/Cliente.php';
// require 'clases/Detalles.php';

use App\Cliente;
use App\Detalles;

//Incluir las otras clases
function mi_autoload($clase) {
    $partes = explode('\\', $clase);
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}
spl_autoload_register('mi_autoload');

$detalles = new App\Detalles();
$cliente = new App\Cliente();


include 'includes/footer.php';
