<?php
class clsCronogramaTuristico {
   
    public $IdCronogramaTuristico;
    public $IdLugarTuristico;
    public $IdDiaSemana;
    public $HoraSalida;
    public $HoraLlegada;
    public $Precio;
    public $Ciudad;
    public $Activo;
    
    public  function CronogramaTuristico($IdCronogramaTuristico,$IdLugarTuristico,$IdDiaSemana,$HoraSalida,$HoraLlegada,
             $Precio,$Activo){
       $this->IdCronogramaTuristico=$IdCronogramaTuristico;
       $this->IdLugarTuristico=$IdLugarTuristico;
       $this->IdDiaSemana=$IdDiaSemana;
       $this->HoraSalida=$HoraSalida;
       $this->HoraLlegada=$HoraLlegada;
       $this->Precio=$Precio;
       $this->Activo=$Activo;
    }
    
    public function setIdCronogramaTuristico($IdCronogramaTuristico){
        $this->IdCronogramaTuristico=$IdCronogramaTuristico;
    }
    
    public function setIdLugarTuristico($IdLugarTuristico){
        $this->IdLugarTuristico=$IdLugarTuristico;
    }
    
    public function setIdDiaSemana($IdDiaSemana){
        $this->IdDiaSemana=$IdDiaSemana;
    }
    
    public function setHoraSalida($HoraSalida){
        $this->HoraSalida=$HoraSalida;
    }
    
    public function  setHoraLlegada($HoraLlegada){
        $this->HoraLlegada=$HoraLlegada;
    }
    
    public function setPrecio($Precio){
        $this->Precio=$Precio;
    }
    public function  setCiudad($Ciudad){
        $this->Ciudad=$Ciudad;
    }

    public function setActivo($Activo){
        $this->Activo=$Activo;
    }
    
    public function getIdCronogramaTuristico(){
        return $this->IdCronogramaTuristico;
    }
    
    public function getIdLugarTuristico(){
        return $this->IdLugarTuristico;
    }
    
    public function getIdDiaSemana(){
        return $this->IdDiaSemana;
    }
    
    public function getHoraSalida(){
        return $this->HoraSalida;
    }
    
    public function getHoraLlegada(){
        return $this->HoraLlegada;
    }
    public function getPrecio(){
        return $this->Precio;
    }
    
    public function getCiudad(){
        return $this->Ciudad;
    }

    public function getActivo(){
        return $this->Activo;
    }  
}
?>
