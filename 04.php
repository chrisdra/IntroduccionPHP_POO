<?php include 'includes/header.php';

class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

//Esto es herencia
class Bicicleta extends Transporte {

    //Al tener una funcion igual al de la clase padre, simplemente se re-escribre, permitiendo mostrar la de la clase hijo 
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y NO GASTA GASOLINA ";
    }
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }

    public function getTransmision() : string {
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();


echo "<hr>";

$auto = new Automovil(4, 4, 'Manual');
echo $auto->getInfo();
echo $auto->getTransmision();

include 'includes/footer.php';