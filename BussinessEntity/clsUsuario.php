<?php
include_once 'clsPersona.php';
class clsUsuario extends clsPersona{
    
    public $Login;
    public $Pasword;
    public $TipoUsuario;
    public $ActivoU;
    
   public function Usuario($Login,$Pasword,$TipoUsuario,$ActivoU) {
        $this->Login=$Login;
        $this->Pasword=$Pasword;
        $this->TipoUsuario=$TipoUsuario;
        $this->ActivoU=$ActivoU;
    }
    
    public function  setLogin($Login){
        $this->Login=$Login;
    }
    public  function setPasword($Pasword){
        $this->Pasword=$Pasword;
    }
    public  function setActivoU($ActivoU){
        $this->ActivoU=$ActivoU;
    }
    public  function setTipoUsuario($TipoUsuario){
        $this->TipoUsuario=$TipoUsuario;
    }
    public function getLogin(){
        return $this->Login;
    }
    public function getPasword(){
        return $this->Pasword;
    }
    public function getTipoUsuario(){
        return $this->TipoUsuario;
    }
    public  function getActivoU(){
        return $this->ActivoU;
    }
}
?>
