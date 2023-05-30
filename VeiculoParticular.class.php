<?php

require_once('Veiculo.class.php');
class VeiculoParticular extends Veiculo{


    public $ValorCarro;
function __construct($Fabricante, $Modelo, $Cor, $Portas, $ValorCarro){

    parent::__construct($Fabricante, $Modelo, $Cor, $Portas);

    $this->ValorCarro = $ValorCarro * 0.70 ;

    


}


function ValorVeiculo(){

    return $this->ValorCarro;

}

function VerVeiculo()
{
    parent::VerVeiculo();
        echo "<b>Valor Do Veiculo:</b>{$this->ValorCarro}<br/>";
        echo "<b>Valor Pago:</b>{$this->ValorVeiculo()}<br/>";

}

}



    


?>