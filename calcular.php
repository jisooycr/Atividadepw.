<?php
define("ANO_ATUAL", 2025);

$anoNascimento = $_POST['ano'];

$idade = ANO_ATUAL - $anoNascimento;
$diasVividos = $idade * 365;
$idadeEm2050 = 2050 - $anoNascimento;

echo "Idade atual: $idade anos<br>";
echo "Dias vividos (aproximado): $diasVividos dias<br>";
echo "Idade em 2050: $idadeEm2050 anos<br>";
?>
