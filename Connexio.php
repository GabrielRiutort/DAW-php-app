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
    /**
     * Summary of obtenirConnexio
     * @return mysqli
     */
    public function obtenirConnexio() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->baseDatos);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
