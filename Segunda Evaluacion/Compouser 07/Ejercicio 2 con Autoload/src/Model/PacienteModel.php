<?php 
namespace Paciente\Model;

class PacienteModel{
    public string $nombre;
    public string $apellidos;
    public string $edad;

    public function __construct(String $nombre, String $apellidos, String $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public static function enfermar(){
        return "<h2>He enfermado</h2>";
    }

    public static function curar(){
        return "<h2>Me he curado</h2>";
    }
}










?>