<?php

class LoginModelo
{
    // aquí se usará pdo
    static function conectar()
    {
        $con = "mysql:host=localhost;dbname=clinic";
        $usuario = "root";
        $contrasena = "";
        
        
        $conexion = new PDO($con,$usuario,$contrasena);
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conexion->exec("set names utf8");
        
        return $conexion;
    }
}