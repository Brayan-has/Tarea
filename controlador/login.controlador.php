<?php
require "../modelo/login.modelo.php";

class LoginControlador
{
    // función para ingresar
    public function ingresar($correo,$contrasena){
        $con = LoginModelo::conectar()->query("SELECT * FROM usuarios");
        
        foreach($con as $resultado){
            
            
            if($resultado["nombre"] == $correo and $resultado["contraseña"] == $contrasena){
                header("Location: ../vista/ingreso.php");
            }else{
                header("Location: ../index.php");
                
            }
            
        }
        
    } 

    public function registro($nombre, $apellido,$contraseña)
    {
        $con = new LoginModelo();
        $registro = $con->conectar()->prepare("INSERT INTO usuarios (nombre,apellido,contraseña) 
        VALUES $nombre, $apellido,$contraseña")->execute();
        if($registro)
        {
            echo "usuario creado correctamente";
        }
        else 
        {
            echo "no se pudo corear el usuario correctamente";
        }
    }
    
}
$conexionE = new LoginControlador();


$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];



$conexionE->ingresar($usuario,$contrasena);