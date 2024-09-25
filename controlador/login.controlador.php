<?php
include_once "./modelo/login.modelo.php";

class LoginControlador
{
    // aquí se validará la existencia de un usuario e ingresar
    public function login()
    {
        // 
        $conexion = LoginModelo::conectar();
        if($conexion)
        {
            echo "conexión exitosa";

        } else {
            echo "Error al conectar";
        }
    }

    public function usuario()
    {
        $conexion = LoginModelo::conectar();
        $conexion->prepare("SELECT * FROM usuarios")->execute();

        foreach($conexion as $con)
        {
            echo $con[0];
        }

    }
    
}