<?php
class clsPersona {
    public $IdPersona;
    public $Apellidos;
    public $Nombres;
    public $Dni;
    public $Sexo;
    public $FechaNacimiento;
    public $Direccion;
    public $Telefono;
    public $Celular;
    public $Email;
    public $Rnd;
    public $Activo;
   

    public function Persona($IdPersona,$Apellidos,$Nombres,$Dni,$Sexo,$FechaNacimiento,$Direccion,$Telefono,$Celular,$Email,
                        $Rnd, $Activo)
    {
        $this ->IdPersona=$IdPersona;
        $this ->Apellidos=$Apellidos;
        $this-> Nombres =$Nombres;
        $this-> Dni=$Dni;
        $this->Sexo=$Sexo;
        $this-> FechaNacimiento=$FechaNacimiento;
        $this->Direccion=$Direccion;
        $this->Telefono=$Telefono;
        $this->Celular=$Celular;
        $this->Email=$Email;
        $this->Rnd=$Rnd;
        $this->Activo=$Activo;
    }
    
    public  function setIdPersona($IdPersona){
        $this ->IdPersona=$IdPersona;
    }
    public function setApellidos($Apellidos){
        $this->Apellidos=$Apellidos;
    }
    
    public function setNombres($Nombres){
        $this->Nombres=$Nombres;
    }
    
    public function setDni($Dni){
        $this->Dni=$Dni;
    }
    
    public function setSexo($Sexo){
        $this->Sexo=$Sexo;
    }
    
    public  function setFechaNacimiento($FechaNacimiento){
        $this->FechaNacimiento=$FechaNacimiento;
    }
    
    public function setDireccion($Direccion){
        $this->Direccion=$Direccion;
    }
    
    public function setTelefono($Telefono){   
        $this->Telefono=$Telefono;
   }
   
   public  function setCelular($Celular){      
       $this->Celular=$Celular;
   }
  
   public function setEmail($Email){
       $this->Email=$Email;
   }
   
   public function setRnd($Rnd){
       $this-> Rnd=$Rnd;
   }

   public function setActivo($Activo){       
       $this-> Activo=$Activo;
   }
   
   public  function getIdPersona(){
       return $this->IdPersona;
   }

   public function getApellidos(){
       return $this->Apellidos;
   }
   
   public function getNombres(){
       return $this->Nombres;
   }
   
   public function  getDni(){
       return $this->Dni;
   }
   
   public function getSexo(){
       return $this->Sexo;
   }
   
   public function getFechaNacimiento(){
       return $this->FechaNacimiento;
   }
   
   public function getDireccion() {
       return $this ->Direccion;               
   }
   
   public function getTelefono(){
       return $this->Telefono;
   }
   
   public function getCelular()
   { 
       return $this ->Celular;
   }
   
   public function getEmail() {
       return $this->Email;
   }
   
   public function getRnd(){
       return $this ->Rnd;
   }
   
   public function getActivo(){
       return $this->Activo;
   }
   
 } 
?>
