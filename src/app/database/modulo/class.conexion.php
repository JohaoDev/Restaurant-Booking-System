<?php
    class Conexion{
        public function get_conexion(){
            $user = "postgres";
            $pass = "123";
            $host = "localhost";
            $db = "DB_reservaMesas"
            $conexion = new PDO('postgres:host = $host;dbname = $db;', $user, $pass);
            return $conexion
        }
    }
?>