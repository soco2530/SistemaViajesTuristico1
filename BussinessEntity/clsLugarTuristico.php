<?php
class clsLugarTuristico {
 
    public $IdLugarTuristico;
    public $LugarTuristico;
    public $Ciudad;
    public $Imagen;
    public $Ubicacion;
    public $Activo;


    public function LugarTuristico($IdLugarTuristico,$LugarTuristico,$Ciudad,$Imagen,$Ubicacion,$Activo){
        $this ->IdLugarTuristico=$IdLugarTuristico;
        $this->LugarTuristico=$LugarTuristico;
        $this->Ciudad=$Ciudad;
        $this->Imagen=$Imagen;
        $this->Ubicacion=$Ubicacion;   
        $this->Activo=$Activo;
    }
    
    public function  setIdLugarTuristico($IdLugarTuristico){
        $this->IdLugarTuristico=$IdLugarTuristico;
    }
    
    public function setLugarTuristico($LugarTuristico){
        $this->LugarTuristico=$LugarTuristico;
    }
    
    public  function setCiudad($Ciudad){
        $this ->Ciudad=$Ciudad;
    }
    
    public function  setImagen($Imagen){
        $this->Imagen=$Imagen;
    }

    public  function setUbicacion($Ubicacion){
        $this->Ubicacion=$Ubicacion;
    }
    
    public function setActivo($Activo){
        $this->Activo=$Activo;
    }
            
    public function getIdLugarTuristico(){
        return $this->IdLugarTuristico;
    }
    
    public function getLugarTuristico(){
        return $this->LugarTuristico;
    }
    
    public function getCiudad(){
        return $this->Ciudad;
    }
    
    public function getImagen(){
        return $this->Imagen;
    }

    public function getUbicacion(){
        return $this->Ubicacion;
    } 
    
    public function  getActivo(){
        return $this->Activo;
    }
}
?>
