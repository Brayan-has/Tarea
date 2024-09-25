<?php
require_once("./controlador/login.controlador.php");


$ingresar = new LoginControlador();

 $ingresar->login();


 $ingresar->usuario();