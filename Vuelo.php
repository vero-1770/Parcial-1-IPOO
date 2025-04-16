<?php
class Vuelo{
        private $numero;
        private $importe;
        private $fecha;
        private $destino;
        private $horaArribo;
        private $horaPartida; 
        private $cantTotalAsientos;
        private $cantAsientosDisponibles;
        private $refPersonaResponsable;

    public function __construct($numVuelo, $importeVuelo, $fechaVuelo, $destinoVuelo, $hArribo, $hPartida, $asientosTotal, $asientosDisponibles, $personaResponsable) {
        $this->numero = $numVuelo;
        $this->importe = $importeVuelo;
        $this->fecha = $fechaVuelo;
        $this->destino = $destinoVuelo;
        $this->horaArribo = $hArribo;
        $this->horaPartida = $hPartida;
        $this->cantTotalAsientos = $asientosTotal;
        $this->cantAsientosDisponibles = $asientosDisponibles;
        $this->refPersonaResponsable = $personaResponsable;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getImporte() {
        return $this->importe;
    }

    public function getFecha() {
        return $this->fecha;
    }
 
    public function getDestino() {
        return $this->destino;
    }

    public function getHoraArribo() {
        return $this->horaArribo;
    }

    public function getHoraPartida() {
        return $this->horaPartida;
    }

    public function getCantTotalAsientos() {
        return $this->cantTotalAsientos;
    }

    public function getCantAsientosDisponibles() {
        return $this->cantAsientosDisponibles;
    }

    public function getRefPersonaResponsable() {
        return $this->refPersonaResponsable;
    }

    public function setNumero($numVuelo) {
        $this->numero = $numVuelo;
    }

    public function setImporte($importeVuelo) {
        $this->importe = $importeVuelo;
    }

    public function setFecha($fechaVuelo) {
        $this->fecha = $fechaVuelo;
    }

    public function setDestino($destinoVuelo) {
        $this->destino = $destinoVuelo;
    }

    public function setHoraArribo($hArribo) {
        $this->horaArribo = $hArribo;
    }

    public function setHoraPartida($hPartida)  {
        $this->horaPartida = $hPartida;
    }

    public function setCantTotalAsientos($asientosTotal) {
        $this->cantTotalAsientos = $asientosTotal;
    }

    public function setCantAsientosDisponibles($asientosDisponibles) {
        $this->cantAsientosDisponibles = $asientosDisponibles;
    }

    public function setRefPersonaResponsable($personaResponsable) {
        $this->refPersonaResponsable = $personaResponsable;
    }

    public function asignarAsientosDisponibles($cantPasajeros) {
        $realizado = false;

        if ($this->getCantAsientosDisponibles() >= $cantPasajeros) {
            $this->setCantAsientosDisponibles($this->getCantAsientosDisponibles - $cantPasajeros);
            $realizado = true;
        }
        return $realizado;
    }
}
?>