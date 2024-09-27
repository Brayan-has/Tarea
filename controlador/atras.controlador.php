<?php

class AtrasControlador
{

    public function atras()
    {
        if($_SESSION["usuario"] == false)
        {
            header("Location: ../index.php");
            exit;
        }
    }
}

$activo = new AtrasControlador();

$activo->atras();