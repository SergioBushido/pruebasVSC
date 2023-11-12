<?php

class ConexionDB {
    private $host = 'localhost';
    private $dbname = 'pruebas';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function __construct() {
        try {
            // Establecer la conexión a la base de datos MySQL usando PDO
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            // Establecer el modo de error de PDO a excepciones
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function obtenerDatosUsuarios() {
        try {
            // Preparar y ejecutar la consulta SQL para obtener datos de la tabla datos_usuarios
            $consulta = $this->conn->prepare("SELECT Nombre, Apellido, Direccion FROM datos_usuarios");
            $consulta->execute();
            // Obtener los resultados como un array asociativo
            $datos = array();
            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $datos[] = $fila;
            }
            return $datos;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return array(); // Devuelve un array vacío en caso de error
        }
    }

    public function cerrarConexion() {
        // Cerrar la conexión
        $this->conn = null;
    }
}

?>
