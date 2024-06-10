<?php
require_once ("php/Usuarios.php");

$Usuario = new Usuarios();

$Usuario->insertaRegistro();

header("Location: contact.html");
?>