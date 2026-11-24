<?php
namespace Zapatilla;

class ZapatillaModel{
    public string $marca;
    public string $modelo;
    public string $tipo;
    public string $precio;

    public function __construct(String $marca, String $modelo, String $tipo, String $precio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->precio = $precio;
    }
}
?>