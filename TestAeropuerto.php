<?php
include_once 'Persona.php';
include_once 'Vuelo.php';
include_once 'Aerolineas.php';
include_once 'Aeropuerto.php';

$vuelo1 = new Vuelo(1, "200$", "14/05/2025", "Buenos Aires", "17:00", "18:30", 80, 40, "Piloto");
$vuelo2 = new Vuelo(2, "400$", "01/07/2025", "Cordoba", "9:00", "13:00", 70, 10, "Piloto");
$vuelo3 = new Vuelo(3, "350$", "20/04/2025", "Mendoza", "18:00", "20:00", 80, 70, "Piloto");
$vuelo4 = new Vuelo(4, "600$", "08/07/2025", "Brasil", "17:00", "21:00", 70, 30, "Piloto");

$coleccionVuelos1 = [];
$coleccionVuelos1[0] = $vuelo1;
$coleccionVuelos1[1] = $vuelo2;

$coleccionVuelos2 = [];
$coleccionVuelos2[0] = $vuelo3;
$coleccionVuelos2[1] = $vuelo4;

$aerolinea1 = new Aerolineas(5400, "Avianca", $coleccionVuelos1);

$aerolinea2 = new Aerolineas(2000, "Copa", $coleccionVuelos2);

$coleccionAerolineas = [];
$coleccionAerolineas[0] = $aerolinea1;
$coleccionAerolineas[1] = $aerolinea2;

$aeropuerto = new Aeropuerto("Aeroparque", "Buenos Aires", $coleccionAerolineas);
?>