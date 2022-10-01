<?php

require_once  "persona.php";

if (isset($_POST["envio"])) {
  $documento1 = $_POST["Documento"];
  $nombre1 = $_POST["nombre"];
  $edad1 = $_POST["edad"];
  $sexo1 = $_POST["sexo"];
  $peso1 = $_POST["peso"];
  $altura1 = $_POST["altura"];

  $persona1 = new persona($documento1,$nombre1,$edad1,$sexo1,$peso1,$altura1);
  var_dump($persona1);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Persona</title>
</head>
<body>
<form class="row g-3" action="Ejecutable.php" method="post">
  <div class="col-auto">
    <input type="text" name="Persona" class="form-control" id="inputPassword2" placeholder="documento">
  </div>
  <div class="col-auto">
    <input type="text" name="nombre" class="form-control" id="inputPassword2" placeholder="name">
  </div>
  <div class="col-auto">
    <input type="number" name="edad" class="form-control" id="inputPassword2" placeholder="edad">
  </div>
  <div class="col-auto">
    <input type="text" name="sexo" class="form-control" id="inputPassword2" placeholder="Sexo">
  </div>
  </div>
  <div class="col-auto">
    <input type="number" name="peso" class="form-control" id="inputPassword2" placeholder="peso">
  </div>
  </div>
  <div class="col-auto">
    <input type="number" name="altura" class="form-control" id="inputPassword2" placeholder="altura">
  </div>
  <br>
  <div class="col-auto">
    <button type="submit" name="envio" class="btn btn-primary mb-3">Enviar</button>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>