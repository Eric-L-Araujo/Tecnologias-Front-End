<?php
//PAra referecniar minha outra classe que será usada
require_once "calculadora.php";
//Pego os 3 campos que eu preciso 
$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];
$operacao = $_POST["operacao"];

//instanciando a classe formada no "calculadoa.php"
$calculadora = new calculadora();


$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);

switch($operacao) {
    case "somar":
        $calculadora->somar();
        break;
    case "subtrair":
        $calculadora->subtrair();
        break;
    case "dividir":
        $calculadora->dividir();
        break;
    case "multiplicar":
        $calculadora->multiplicar();
        break;
}

header("location:index.php?total=".$calculadora->gettotal());

?>