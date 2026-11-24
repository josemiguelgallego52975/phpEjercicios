<?php
namespace User\Model;

class UserModel{
    protected string $userName;
    protected string $nombre;
    protected string $apellidos;
    protected string $email;
    protected string $password;
    protected data $ultimoAcceso;
    protected string $log;

    // Getter
    public function getUserName(): string
    {
        return $this->userName;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getApellidos(): string
    {
        return $this->apellidos;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function getultimoAcceso(): data
    {
        return $this->ultimoAcceso;
    }
    public function getLog(): string
    {
        return $this->log;
    }

    // Setter
    
    public function setUserName(string $nombre): void
    {
        $this->userName;
    }
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function setApellidos(string $nombre): void
    {
        $this->apellidos;
    }
    public function setEmail(): void
    {
        $this->email;
    }
    public function getPassword(): void
    {
        $this->password;
    }
    public function getultimoAcceso(): void
    {
        $this->ultimoAcceso;
    }
    public function getLog(): void
    {
        $this->log;
    }
    

    abstract function showAction(){}
    public static function login(){}
    public static function logout(){}
    
}




?>