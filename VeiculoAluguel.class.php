<?php

require_once('Veiculo.class.php');
class VeiculoAluguel extends Veiculo{


    public $ValorCarro;

function __construct($Fabricante, $Modelo, $Cor, $Portas, $ValorCarro){

    parent::__construct($Fabricante, $Modelo, $Cor, $Portas);

    $this->ValorCarro = $ValorCarro;
}


function ValorVeiculo(){

    return $this->ValorCarro * 0.70;
    //return $this->ValorCarro;
    //$this->Valor;

}

function VerVeiculo(){
parent::VerVeiculo();
        
        echo "<b>Valor Do Carro:</b>{$this->ValorCarro}<br/>";
        /*
        echo "<b>Valor Do Veiculo:</b>{$this->ValorVeiculo()}<br/>";
        //echo "<b>Valor Pago:</b>{$this->Valor()}<br/>";
        echo "<b>Tipo</b> {$this->Tipo()}";
*/
}


}


?>