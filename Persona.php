<?php 
class Persona {
    private $nombre;
    private $apellido;
    private $direccion;
    private $mail;
    private $telefono;

    public function __construct($name, $lastName, $localidad, $correo, $nroTelefono) {
        $this->nombre = $name;
        $this->apellido = $lastName;
        $this->direccion = $localidad;
        $this->mail = $correo;
        $this->telefono = $nroTelefono;     
    }

    public function __toString() {

        return "Nombre: " . $this->getNombre() . "\nApellido: " . $this->getApellido() . "\nDireccion: " .  $this->getDireccion() . "\nMail: " . $this->getDireccion() . "\nTelefono: " . $this->getTelefono();
    }
}
?>