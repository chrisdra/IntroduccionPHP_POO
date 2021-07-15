<?php include 'includes/header.php';

class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " y una capacidad de " . $this->capacidad . " personas ";
    }
}

//Esto es herencia
class Bicicleta extends Transporte {

}

class Automovil extends Transporte {

}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();

echo "<hr>";

$auto = new Automovil(4, 4);
echo $auto->getInfo();

include 'includes/footer.php';