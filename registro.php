<?php

include("conexion.php");

$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="INSERT INTO usuarios VALUES ('$nombre','$apellido','$email','$password')";

$ejecutar=mysqli_query($link, $sql);


?>