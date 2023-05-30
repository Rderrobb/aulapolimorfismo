<?php

class Veiculo{

    public $Fabricante;
    public $Modelo;
    public $Cor;
    public $Portas;
    

function __construct($Fabricante, $Modelo, $Cor, $Portas){
    $this->Fabricante = $Fabricante;
    $this->Modelo = $Modelo;
    $this->Cor = $Cor;
    $this->Portas = $Portas;
    

}

function VerVeiculo(){
    echo "<b>Fabricante: </b>{$this->Fabricante}<br/>";
    echo "<b>Modelo: </b>{$this->Modelo}<br/>";
    echo "<b>Cor: </b>{$this->Cor}<br/>";
    echo "<b>Portas: </b>{$this->Portas}<br/>";
    
    
    
}

}

?>