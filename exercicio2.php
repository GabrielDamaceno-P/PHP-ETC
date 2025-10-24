<?php
$ano = 1980;
$nome = 'Joe';
$peso = 100;
const pais = 'Índia';
$numero = true;

echo "O ano era $ano quando o Elefante $nome que pesava $peso kg foi o $numero elefante ser aprisionado e levado para a ".pais;
echo "<br>";
//adição
$produto1 = 40;
$produto2 = 30;
$total = $produto1 + $produto2;
echo "o total é: $total <br>";
//subtração
$total = 100;
$desconto = 30;
$valorfinal = $total - $desconto;

echo"o valor final é: $valorfinal<br>";


//multiplicação
$precoUnitario = 20;
$quantidade = 3;
$total = $precoUnitario * $quantidade;
echo "o total é: $total<br>";

//divisão
$total = 100;
$quantidade = 4;
$valor_unit = $total / $quantidade;

echo "O valor total é: $valor_unit<br><br>";

//estrutura de condição

$comida = false;
if($comida == true){
    echo "A raposa encontrou a comida e comeu";
}else{
    echo "A raposa ficou com fome<br>";
} 

$idade = 10;
if($idade < 12){
    echo "você é criança<br>";
}elseif($idade >=12 && $idade <18){
    echo "Voce é um Adolescente<br>";
}elseif ($idade >=18 && $idade <60 ){
    echo "voce é um adulto<br>";
}else{
    echo "você é um idoso <br>";
}

$ano_atual = date("Y");

$resultado = $ano_atual - $ano;

$peso_atual = ($resultado * 3) + $peso;

echo "$nome, pesa atualmente $peso_atual e se passaram $resultado anos<br>";

$prioridade = "baixa";
switch($prioridade){
    case "baixa":
    echo "O chamado será atendido em 72horas<br>";
    break;
    case "média":
    echo "O chamado será atendido em 24hrs<br>";
    break;
    case "alta":
    echo "O chamado será atendido imediatamente<br>";
    break;
    default:
    echo "prioridade inválida<br>";
}


?>