<?php 

include_once "../modelo/login.modelo.php";
class RegistroControlador
{
    public function registro($nombre,$contraseña)
    {
        $consulta = "INSERT INTO usuarios(nombre,contraseña)VALUES(?,?)";

        $con = LoginModelo::conectar();

        $con->prepare($consulta)->execute([$nombre,$contraseña]);
        if($con)
        {
            echo "usuario creado correctamente";
        }
        else 
        {
            echo "no se pudo corear el usuario correctamente";
        }
    }
}

// capturamos los datos del formulario de registro

$nombre = $_POST["usuario"];
$contraseña = $_POST["contrasena"];

$con = new RegistroControlador();

$con->registro($nombre,$contraseña);