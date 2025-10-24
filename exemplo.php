<?php

$inteiro = 42;
$decimal = 3.14;
$texto = "o corinthians é o melhor time";
$boleano = true;

echo "tipo inteiro:";
var_dump ($inteiro);

echo "<br>";

echo "tipo float:";
var_dump ($decimal);

echo "<br>";

echo "tipo string:";
var_dump ($texto);

echo "<br>";

echo "tipo booleano:";
var_dump ($boleano);
echo "<br>";

//tipo composto

$arrayNumerico = [10, 20, 30];
$arrayAssociativo = [
    "nome" => "Carlos",
    "idade" => "55",
    "casado" => true
];
echo "array númerico:";
var_dump($arrayNumerico);
echo "<br>";
echo "array associativo";
var_dump($arrayAssociativo);
echo "<br>";

//Objeto (Classe + instancia)
class Pessoa {
    public $nome;
    public $idade;

    public function apresentar(){
        return "Olá, eu sou {$this-> nome},
        tenho {$this->idade} anos. ";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Ana";
$pessoa->idade = 25;
echo "objeto Pessoa:";
var_dump ($pessoa);

echo $pessoa->apresentar();
?>