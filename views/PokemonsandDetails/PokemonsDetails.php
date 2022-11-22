<?php 

$n_h = $_GET['id'];

include("../../DbConexion/conexion.php");
$query = "SELECT * FROM registros ";
$resultado = $conexion->query($query);

session_start();
if(!isset($_SESSION['correo'])){
  echo "<script>alert('Inicia sesion o registrate para continuar'); location='../LoginandRegistro/login.php';</script>";
};

?>

<?php
// //
$curl = curl_init();


curl_setopt($curl, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/$n_h");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);


$imagen = json_decode($response, true);

// echo 'grgrgrg'.$imagen['name'];
// print_r($imagen);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/PokemonsDetails.css">
  <title>PoketApi</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
    <img src="../../assets/img/pokemons.png" alt="" width="156" height="45" class="d-inline-block aling-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./LoginPokemons.php">Pokemons</a>
        </li>
      </ul>
        <a href="../LoginandRegistro/close_session.php" class="a"> <i class="bi bi-box-arrow-right"></i></a>
    </div>
  </div>
</nav>


  <div class="contenedor">
    <div class="contenido">
    <h5 style="margin-left: 15px;">#<?php echo $n_h?></h5>
    <div class="img d-flex">
    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/<?php echo $n_h?>.png" />
    </div>
        
        <div class="row text-center p-3">
        <h5 class="text text-center"> <?php echo $imagen['name'] ?></h5> <br><br>
    <div class="col-lg-4">
    <p class="card-text"><strong>Movimiento</strong> <br><?php echo  $imagen['moves'][0]['move']['name']?> </p>
    <p class="card-text"><strong>Peso</strong> <br><?php echo  $imagen['weight'] ?> kg</p>
    <p class="card-text"><strong>Tipo</strong> <br> <?php echo  $imagen['types'][0]['type']['name']?></p>
    </div>
    <div class="col-lg-4">
    <p class="card-text"><strong>Habilidad</strong> <br> <?php echo  $imagen['abilities'][0]['ability']['name']?></p>
    <p class="card-text"><strong>Altura</strong> <br><?php echo  $imagen['height'] ?> m</p>
    <p class="card-text"><strong>Exp</strong> <br><?php echo  $imagen['base_experience']?> </p>
    </div>
    <div class="col-lg-4">
    <p class="card-text"><strong>Estadistica</strong> <br><?php echo  $imagen['stats'][0]['base_stat']?> </p>
    <p class="card-text"><strong>Esfuerzo</strong> <br> <?php echo  $imagen['stats'][0]['effort']?></p>
    <p class="card-text"><strong>Orden</strong> <br><?php echo  $imagen['order'] ?> </p>
    </div>
    </div>
    </div>
    </div>
  
    <footer>
      <div class="pie-pagina">
        <h5>Create by:</h5> <p>Jose Uduan Hurtado</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
 