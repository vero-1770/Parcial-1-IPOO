<?php
class Aeropuerto {
    private $denominacion;
    private $direccion;
    private $coleccionAerolineas; 

    public function __construct($nombre, $locacion, $aerolineas) {
        $this->denominacion = $nombre;
        $this->direccion = $locacion;
        $this->coleccionAerolineas = $aerolineas;
    }

    public function getDenominacion() {
        return $this->denominacion;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getColeccionAerolineas() {
        return $this->coleccionAerolineas;
    }

    public function setDenominacion($nombre) {
        $this->denominacion = $nombre;
    }

    public function setDireccion($locacion) {
        $this->direccion = $locacion;
    }

    public function setColeccionAerolineas($aerolineas) {
        $this->coleccionAerolineas = $aerolineas;
    }

    public function __toString() {
        return "Denominacion: " . $this->getDenominacion() . "\nDireccion: " . $this->getDireccion() . "\nAerolineas: " . $this->getColeccionAerolineas();
    }

    public function retornarVuelosAerolinea($aerolinea) {
       
    }

    /*Implementar el método ventaAutomatica que recibe por parámetro la cantidad de asientos, una fecha y un destino
     y el aeropuerto realiza automáticamente la asignación al vuelo. 
Para la implementación de este método debe utilizarse uno de los métodos implementados en la clase Vuelo. */

    public function ventaAutomatica($cantAsientos, $fecha, $destino) {

    }

    /*Implementar en la clase Aeropuerto el método promedioRecaudadoXAerolinea,  que recibe por parámetro la identificación 
    de una Aerolínea y retorna el promedio de lo recaudado por esa Aerolínea en ese Aeropuerto.
Para la implementación utilizar, si es posible, alguno de los métodos previamente implementado. */

    public function promedioRecaudadoXAerolinea($identificacionAerolinea) {


        return ;
    }

    
}
?>