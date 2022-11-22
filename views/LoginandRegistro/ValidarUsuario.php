<?php
session_start();

require('../../DbConexion/conexion.php');
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];




$consulta ="SELECT * FROM registros WHERE correo = '$correo' AND contraseña = '$contraseña'";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
  $_SESSION['correo']=$correo;
  header ("Location:../PokemonsandDetails/LoginPokemons.php");
}else {
  ?>
  <?php
  include("./login.php");

?>
<div class="error">
<h2 class="bad">Error, gmail o contraseña incorrecta</h2>
</div>
<?php

}


// mysqli_free_result($resultado);
mysqli_close($conexion);
?>