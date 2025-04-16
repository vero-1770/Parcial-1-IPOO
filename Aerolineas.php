<?php
class Areolineas {
    private $identificacion;
    private $nombre;
    private $coleccionVuelosProgramados;

    public function __construct($identificacionAreolinea, $nombreAreolinea, $coleccionVuelos) {
        $this->identificacion = $identificacionAreolinea;
        $this->nombre = $nombreAreolinea;
        $this->coleccionVuelosProgramados = $coleccionVuelos;
    }

    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getColeccionVuelosProgramados()  {
        return $this->coleccionVuelosProgramados;
    }

    public function setIdentificacion($identificacionAreolinea)  {
        $this->identificacion = $identificacionAreolinea;
    }

    public function setNombre($nombreAreolinea) {
        $this->nombre = $nombreAreolinea;
    }

    public function setColeccionVuelosProgramados($coleccionVuelos) {
        $this->coleccionVuelosProgramados = $coleccionVuelos;
    }

    public function darVueloADestino($destino, $cantAsientos) {
        $vuelos = [];
        $colVuelos = $this->getColeccionVuelosProgramados();
        foreach ($colVuelos as $unObjVuelo) {
            $elDestino = $this->getDestino();
            $asientosLibres = $this->getCantAsientosDisponibles();
            if ($elDestino == $destino && $asientosLibres >= $cantAsientos) {
                array_push($vuelos, $unObjVuelo);
            }
        }
        return $vuelos;
    }

    public function incorporarVuelo($objVuelo) {
        $valor = false;
        $vuelosRegistrado[] = $this->getColeccionVuelosProgramados();

        foreach ($vuelosRegistrado as $objVuelo) {

            if (($objVuelo->getDestino() != $vuelosRegistrado->getDestino()) && ($objVuelo->getFecha() != $vuelosRegistrado->getFecha()) && ($objVuelo->getHoraPartida() != $vuelosRegistrado->getHoraPartida())) {
                  
                $vuelosRegistrado = $objVuelo;
                $valor = true;
            }
        }
        return $valor;
    }

    public function venderVueloDestino($cantAsientos, $destino, $fecha) {
        $msj = null;
        $vuelos = $this->getColeccionVuelosProgramados();
        while ($vuelos->getDestino() == $destino) {
            if ($fecha == $vuelos->getDestino()) {
               $msj = $vuelos->asignarAsientosDisponibles($cantPasajeros);
            }
        }
        return $msj;
    }
}
?>