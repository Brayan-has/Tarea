<?php
require "./modelo/login.modelo.php";

class LoginControlador
{
    // función para ingresar
    public function ingresar($correo,$contrasena){
        $con = LoginModelo::conectar()->query("SELECT * FROM usuarios");
        
        foreach($con as $resultado){
            
            
            if($resultado["nombre"] == $correo and $resultado["contraseña"] == $contrasena){
                header("Location: ../vistas/ingreso.php");
            }else{
                // header("Location: ../index.php");
                echo"Contraseña o usuario incorrectos";
            }
            
        }
        
    } 
    
}
$conexionE = new LoginControlador();


$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];



$conexionE->ingresar($usuario,$contrasena);