<?php
namespace Admin\Model;

class AdminModel extends UserModel{
    public int $adminLevel;

    

    public function __construct(String $userName, String $nombre, String $apellidos, String $email, data $ultimoAcceso, String $log, int $adminLevel) {
        $this->userName = $userName;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->ultimoAcceso = $ultimoAcceso;
        $this->log = $log;
        $this->adminLevel = $adminLevel;
    }

    public static function desactivarUsuario(){}

}




?>