<?php
include("../../DbConexion/conexion.php");
$query = "SELECT * FROM `registros`";
$resultado = $conexion->query($query);

session_start();
if(!isset($_SESSION['correo'])){
  echo "<script>alert('Por favor es necesario el nicia sesion'); location='../LoginandRegistro/login.php';</script>";
};


// //
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.canalti.com.br/api/pokemons.json",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);
$imagen = json_decode($response, true);

// print_r($imagen);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Pokemons.css">
    <title>Rick Morty</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

<!-- SCROLL -->
<div id="button-up">
<i class="bi bi-chevron-double-up" style=" font-size: 25px;"></i>
</div>

<!-- NAVBAR -->
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
              
    
     
        <a class="a" href="../LoginandRegistro/close_session.php"><i class="bi bi-box-arrow-right"></i></a>
        
            </div>
        </div>
    </nav>

    <div class="contenedor">
        <?php
        foreach ($imagen['pokemon'] as $value) {
            $name = $value['name'];
            $imagen = $value['img'];
            $url = $value['id'];
        ?>
            <form action="./PokemonsDetails.php?id=<?php echo $url ?>" method="POST">
                <div class="card" style="width: 12rem;">
                    <br>
                    <h5 class="text-center"><?php echo $name ?> </h5>
                    <div class="img">
                        <img src="<?php echo $imagen ?>" />
                    </div>
                    <hr style="color:#f3009a">
                    <button type="submit" class="btn">ver detalles</button>
                </div>
            </form>
        <?php
        }
        ?>
    </div>


    <footer>
      <div class="pie-pagina">
        <h5>Create by:</h5> <p>Jose Uduan Hurtado</p>
      </div>
    </footer>

    <script src="../Js/Scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>