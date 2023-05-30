<?php

$Veiculo = $_POST['Veiculo'];






if ($Veiculo == "VeiculoAluguel"){

    require_once("VeiculoAluguel.class.php");

    $Fabricante = $_POST['Fabricante'];
    $Modelo = $_POST['Modelo'];
    $Cor = $_POST['Cor'];
    $Portas = $_POST['Portas'];
    $ValorCarro = $_POST['ValorCarro'];
    
    $Veiculo1 = new VeiculoAluguel($Fabricante, $Modelo, $Cor, $Portas, $ValorCarro);

    echo $Veiculo1->VerVeiculo();
   
}


else {

    require_once("VeiculoParticular.class.php");
    $Fabricante = $_POST['Fabricante'];
    $Modelo = $_POST['Modelo'];
    $Cor = $_POST['Cor'];
    $Portas = $_POST['Portas'];
    $ValorCarro = $_POST['ValorCarro'];

    $Veiculo1 = new VeiculoParticular($Fabricante, $Modelo, $Cor, $Portas, $ValorCarro);
    
    echo $Veiculo1->VerVeiculo();
}

?>