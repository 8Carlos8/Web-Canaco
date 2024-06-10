<?php
require_once ("php/Mensajes.php");

$Mensaje = new Mensajes();

$Mensaje->insertaRegistro();

header("Location: index.html");
?>