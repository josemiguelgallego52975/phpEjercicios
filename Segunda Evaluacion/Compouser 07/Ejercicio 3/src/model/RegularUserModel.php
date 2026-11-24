<?php
namespace RegularUser\Model;

class RegularUserModel extends UserModel{
    public string $instagram;
    public string $twitter;

    public function __construct(String $userName, String $nombre, String $apellidos, String $email, data $ultimoAcceso, String $log, String $instagram, String $twitter) {
        $this->userName = $userName;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->ultimoAcceso = $ultimoAcceso;
        $this->log = $log;
        $this->instagram = $instagram;
        $this->twitter = $twitter;
    }
    


}




?>