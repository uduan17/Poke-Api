<?php
session_start();

include("../../DbConexion/conexion.php");


$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];


$sql="INSERT INTO registros (nombre, apellidos, correo, contraseña) VALUES ('$nombre','$apellidos','$correo','$contraseña')";
$query= mysqli_query ($conexion,$sql);

if($query){
    $_SESSION['correo']=$correo;
 Header("Location:../PokemonsandDetails/LoginPokemons.php");
}
else {
    echo '<h2>Hubo un error</h2>';
}
?>