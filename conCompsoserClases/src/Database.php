<?php
namespace Sergi;

class Database {
    private $host = "localhost";
    private $usuario = "root";
    private $contrasena = "";
    private $base_de_datos = "empresa";
    private $conexion;
 
    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->base_de_datos}";
        $opciones = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->conexion = new \PDO($dsn, $this->usuario, $this->contrasena, $opciones);
        } catch (\PDOException $e) {
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->conexion;
    }
}
