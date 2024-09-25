<?php
include_once "../modelo/login.modelo.php";

class LoginControlador
{
    // aquí se validará la existencia de un usuario e ingresar
    public function login($user, $pass)
    {
        // 
        $conexion = LoginModelo::conectar();

        // if($conexion->pass = $pass && $conexion->user == $user)
        // {
        //     header("Location: ./");
        // }
    }
}