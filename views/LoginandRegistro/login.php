<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Loginandregistro.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
    <img src="../../assets/img/pokemons.png" alt="" width="156" height="45" class="d-inline-block aling-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../PokemonsandDetails/Pokemons.php">Pokemons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registro.php">Registrarse</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="paratodo">
    <div class="contenedor">
    <h3 class="text-center">Login</h3>
        <div class="contenido">
            <form action="./ValidarUsuario.php" method="post">
                <label>Correo</label>
            <input type="email" name="correo" required> 
            <label>Contraseña</label>
            <input type="password" name="contraseña" required>
            <p class="text-center">¿No tienes una cuenta?<a href="./registro.php">Registrate</a></p>
            <button type="submit">Ingresar</button>
            
            </form>
        </div>
    </div>
    </div>

    <footer>
      <div class="pie-pagina p-2">
        <h5>Create by:</h5> <p>Jose Uduan Hurtado</p>
      </div>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>