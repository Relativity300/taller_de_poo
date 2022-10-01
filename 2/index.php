<?php
 include "Cuenta.php";
 session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<form class="row g-3" action="Ejecutable2.php" method="post">
  <br>
  <div class="col-auto">
    <button type="submit" name="actualizar" class="btn btn-primary mb-3">Actualizar Saldo</button>
  </div>
  <div class="col-auto">
    <input type="number" name="ValorRetirar" class="form-control" id="inputPassword2" placeholder="¿Cuanto vaz a retirar?">
  </div>
  <br>
  <div class="col-auto">
    <button type="submit" name="retirar" class="btn btn-primary mb-3">Retirar</button>
  </div>
  <div class="col-auto">
    <input type="number" name="ValorIngresar" class="form-control" id="inputPassword2" placeholder="¿Cuanto vaz a ingresar?">
  </div>
  <br>
  <div class="col-auto">
    <button type="submit" name="ingresar" class="btn btn-primary mb-3">Ingresar</button>
  </div>
</form>


<?php

  if (isset($_POST["cuenta1"])) {
    $cuenta1 = $_SESSION['cuenta1'];
  }else{
    $cuenta1 = new Cuenta(0,12,100001);
    $_SESSION['cuenta1'] = $cuenta1;
  }

  if(isset($_POST["actualizar"])){
      $cuenta1-> actualizarSaldo();
  }elseif(isset($_POST["retirar"])) {
      echo $cuenta1-> retirar($_POST["ValorRetirar"]);
  }elseif(isset($_POST["ingresar"])){
      echo $cuenta1-> entro($_POST['ValorIngresar']);
  }

  echo $cuenta1 -> __toString();

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>