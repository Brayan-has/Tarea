<?php
require "../modelo/login.modelo.php";

session_start();
class LoginControlador
{
    // función para ingresar
    public function ingresar($usuario,$contrasena){
        $con = LoginModelo::conectar()->prepare("SELECT nombre,contraseña FROM usuarios WHERE nombre = ? AND contraseña = ?");
        $con->execute([$usuario,$contrasena]);
        $resultado = $con->fetch(PDO::FETCH_ASSOC);

            if($resultado["nombre"] === $usuario && $resultado["contraseña"] === $contrasena){
                $_SESSION["usuario"] = $usuario;
                
                header("Location: ../vista/principal.php");
                exit();
            }else{
                header("Location: ../index.php");
                break;
            }
            
        
        
    }     
}



$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$conexionE = new LoginControlador();

$conexionE->ingresar($usuario,$contrasena);