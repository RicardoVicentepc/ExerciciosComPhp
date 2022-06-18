<?php
    $n1 = $_POST['n1'];
    if ($n1 % 2 ) {
        echo($n1. " é um número primo");
    } else {
        echo($n1. " não é um número primo");
    }
    echo ('<br>');
     echo ('<br> Testar novante só pra confimar kkk:  <a href="../NumPrimos/index.php"><button type="button"> Testar Denovo</button></a>');
     echo ('<br>');
     echo ('<br> Voltar para lista de Exercicios:         <a href="../index.html"><button type="button"> Clique Aqui Confia kkk</button></a>');

?>