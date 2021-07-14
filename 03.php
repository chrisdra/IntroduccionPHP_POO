<?php 
declare( strict_types = 1);

use Producto as GlobalProducto;

include 'includes/header.php';

//Metodos estaticos

class Producto {

    public $imagen;
    public static $imagenPlaceHolder = "Imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen) {
            self::$imagenPlaceHolder;
        }
    }

    public static function obtenerImagenProducto() {
        return self::$imagen;
    }

    public static function obtenerProducto() {
        echo "Obteniendo datos del Producto...";
    }

    public function mostrarProduto() {
        echo "El produto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}


$producto = new Producto('Tablet', 200, true, '');
//$producto->mostrarProduto();

//echo Producto::obtenerProducto();
echo Producto::obtenerImagenProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true, 'monitorCurvo.jpg');
$producto2->mostrarProduto();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';