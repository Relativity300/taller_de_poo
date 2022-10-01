<?php 

class Cuenta{

    private $numero_cuenta = 2902;
    private $doIdentidad;
    private $saldo_actual;
    private $interes_anual;


    public function __construct0(){

    }
    public function __construct($saldo_actual,$interes_anual,$doIdentidad){
        $this->saldo_actual = $saldo_actual;
        $this->interes_anual = $interes_anual;
        $this->doIdentidad = $doIdentidad;

    }

    
    public function getNumero_cuenta(){
        return $this -> numero_cuenta++;
    }
    public function getDoIdentidad(){
        return $this -> doIdentidad;
    }
    public function getSaldo(){
        return $this -> saldo_actual;
    }
    public function getInteres_anual(){
        return $this -> interes_anual;
    }

    
    
    public function setDocuIdentidad($doIdentidad){
        $this->doIdentidad = $doIdentidad;
    }
    public function setSaldo($saldo_actual){
        $this->saldo_actual = $saldo_actual;
    }
    public function setInteres_anual($interes_anual){
        $this->interes_anual = $interes_anual;
    }
    
    public function actualizarSaldo(){
        $actualizado =round(Self::getSaldo() + (Self::getSaldo()* ((Self::getInteres_anual() / 100)/365)));
        Self::setSaldo($actualizado);
    }
    
    public function entro($entro){
        echo "Ingresaste:" . $entro;
        $actualizar = Self::getSaldo()+$entro;
        Self::setSaldo($actualizar);
    }

    public function retiro($retiro){
        $saldoActual = Self::setSaldo();
        if ($saldoActual > $retiro) {

            $actualizar = Self::getSaldo()-$retiro;
            Self::setSaldo($actualizar);
            echo "Retiraste: " . $retiro . "Tu saldo es de: ". $saldo_actual;
        }else{
            echo "Tu saldo es: ". $saldo_actual;

        }
    }


    public function __toString(){
        return 
        "
        Documento identidad: $this -> doIdentidad <br>
        Este es tu saldo actual: $this-> saldo_actual  <br>
        Tu interes anual es de: $this -> interes_anual<br>
        Tu cuenta es: " . self::getNumero_cuenta(); 
    }
}