<?php 
declare( strict_types = 1);

include 'includes/header.php';

//Encapsulacion
class Producto {

    //Public - Se puede cceder y modificar en cualquier lugar ( clase y objeto )
    //Protected - Se puede acceder / modificar unicamente en la clase
    //Private - solo miembros de la misma clase pueden acceder a el

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
        
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

$producto = new Producto('Tablet', 200, true);
//$producto->mostrarProduto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true);
$producto2->mostrarProduto();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';