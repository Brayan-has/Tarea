<?php
require "../modelo/login.modelo.php";

session_start();
class LoginControlador
{
    // función para ingresar
    public function ingresar($usuario,$contrasena){
        $con = LoginModelo::conectar()->prepare("SELECT nombre,contraseña FROM usuarios WHERE nombre = ? AND contraseña = ?");
        $con->execute([$usuario,$contrasena]);
        foreach($con as $resultado){

            if($resultado["nombre"] === $usuario && $resultado["contraseña"] === $contrasena){
                $_SESSION["usuario"] = $usuario;
                
                header("Location: ../vista/principal.php");
            }else{
                header("Location: ../index.php");
                
            }
            
        }
        
    }     
}



$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$conexionE = new LoginControlador();

$conexionE->ingresar($usuario,$contrasena);