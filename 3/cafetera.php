<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Cafetera</title>
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Ejercicio 3</a>
    <img src="https://tenor.com/view/megacatyes-omgyes-gif-26228859" width="80px"  alt="" >
    
  </div>
</nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>

<?php

class cafetera{
    private $capacidad_maxima;
    private $cantidad_actual;

    public function __construct() {
        $this->capacidad_maxima = 1000;
        $this->cantidad_actual = 0;
    }

    public function llenar_cafetera(){
        $this->cantidad_actual = $this->capacidad_maxima; 
    }   
    public function servir_taza($cantidad_actual) {
        if($capacidadDeTaza > $this->cantidad_actual) {
            echo 'No se logro llenar la taza, por favor agrega mas cafe ';
        } else {
            $this->cantidad_actual -= $capacidadDeTaza;
        }
    }
    
    cantidadActual

    public function vaciar_cafetera() {
        $this->cantidad_actual = 0; 
    }   

    public function agregar_cafe($rellenar) {
        
        $this->cantidad_actual += $rellenar;

       
        if($this->cantidad_actual > $this->capacidad_maxima){
            $this->cantidad_actual = $this->capacidad_maxima;
        }
    }   

    public function mostrar() {
        echo 'Capacidad máxima de la taza: ' . $this->capacidad_maxima .'</br>'  ;
        echo 'Capacidad que contiene la taza actualmente: ' . $this->cantidad_actual ;
    }
}

$cafetera = new Cafetera(1000,0);
$cafetera->llenar_cafetera();
$cafetera->servir_taza(200);
$cafetera->agregar_cafe(150);
$cafetera->mostrar();
