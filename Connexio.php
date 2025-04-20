<?php
/**
 * Summary of Connexio
 */
class Connexio {
    //Dades de la connexió a la base de dades la_meva_botiga.
    private $host = "192.168.1.143";
    private $usuario = "usuari";
    private $contraseña = "usuari123";
    private $baseDatos = "la_meva_botiga";
    private $port = 3307; // O 3307 según sea tu caso


    /**
     * Summary of obtenirConnexio
     * @return mysqli
     */
    public function obtenirConnexio() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->baseDatos, $this->port);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
