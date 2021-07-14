<?php 
declare( strict_types = 1);

include 'includes/header.php';

//Definir una clase con php 7 y 6
// class Producto {
//     public $nombre;
//     public $precio;
//     public $disponible;

//     public function __construct(string $nombre, int $precio, bool $disponible)
//     {
//         $this->nombre = $nombre;
//         $this->precio = $precio;
//         $this->disponible = $disponible;
//     }
// }

//Definir clase con php 8
class Producto {
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
        
    }

    public function mostrarProduto() {
        echo "El produto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

//Rellenar informacion de una clase
$producto = new Producto('Tablet', 200, true);
//Mostrar informacion con una funcion o metodo
$producto->mostrarProduto();

//Mostrar informacion de una clase
echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true);
$producto2->mostrarProduto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';