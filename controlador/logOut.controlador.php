<?php

include_once "../modelo/login.modelo.php";
session_start();
class LogOutControlador
{
    public function salir()
    {
        // $conexion = LoginModelo::conectar();
        session_destroy();
        
    }

}



$salir = new LogOutControlador();

$salir->salir();

header("Location: ../index.php");