<?php
/**
 * Desenvolva um programa para calcular a potência de um número
 * por uma base qualquer. O programa
 * deverá realizar a leitura da base e do expoente.
 */

$base = $_POST['base'];//base
$expo = $_POST['expo'];//expoente
$res = 1;//armazenador
echo($base." elevado a ". $expo);

while($expo >= 1){
   
   $res = $res * $base;
   $expo--;
}
echo(" = " . $res);
echo('<br>');
echo('<br> Testar novante só pra confimar kkk:  <a href="../BaseExpoente/index.php"><button type="button"> Testar Denovo</button></a>');
echo('<br>');
echo('<br> Voltar para lista de Exercicios:         <a href="../index.html"><button type="button"> Clique Aqui Confia kkk</button></a>');
?>