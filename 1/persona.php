<?php
class Persona{
        public $documento = "";
        public $nombre = "";
        public $edad = 0;
        public $sexo = "M";
        public $peso = 0;
        public $altura = 0;
    
    public function __construct1($nombre)
    {
        $this->nombre=$nombre;
    }
    public function __construct2($documento,$nombre,$edad,$sexo)
    {
        $this->documento;
        $this->nombre ;
        $this->edad; 
        $this->sexo;
    }

     public function __construct($documento, $nombre, $edad,$sexo,$peso,$altura)
    
     {
        $this->documento = $documento;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    #GET Y SET 
    public function getDocumento()
    {
        return $this->documento;
    }
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function calcularIMC($altura,$peso){
        $IMC = $peso/(($altura/100)^2);
        
        if ($IMC < 18.5) {
            $respuesta = -1;
        }elseif ($IMC >= 18.5 && $IMC <= 24.9){
            $respuesta = 0;            
        }elseif ($IMC >= 25.0 && $IMC <= 29.9){
            $respuesta = 1;            
        }elseif ($IMC >= 30.0 && $IMC <= 39.9){
            $respuesta = 2 ;            
        }elseif ($IMC >= 40.0){
            $respuesta = 3 ;            
        }
        return $respuesta;
    }

    public function esMayorDeEdad($edad){
        $answer = false;
        if ($edad >= 18) {
            $answer = true;
        }   
        return $this->$answer;
    }

    public function comprobarSexo($sexo){
        if (!($sexo = "M" || $sexo = "F") || !($sexo = "m" || $sexo = "f")) {
            $sexo = "M";
        }
        return $this->$sexo;
    }

    public function generaDNI(){
        $DNI = rand();
        return $DNI;
    }
}