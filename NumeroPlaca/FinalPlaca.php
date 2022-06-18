<?php

 /*
       Desenvolva uma página que a partir 
       dos números de uma placa de um veículo informe o dia de rodízio de um veículo. 
        Segunda final 1 e 2 
        Terça final 3 e 4 
        Quarta final 5 e 6 
        Quinta final 7 e 8 
        Sexta final 9 e 0 
       */ 
      $final = $_POST['final'];
      $final = $final % 10;

      if($final == 1 || $final == 2){
        echo("Segunda-Feira <br>");
        echo("Carros com o final 1 e 2 podem circular...<br>");
        echo("Número inserido = ".$final);
     }else if($final == 3 || $final == 4){
        echo("Terça-Feira <br>");
        echo("Carros com o final 3 e 4 podem circular...<br>");
        echo("Número inserido = ".$final);
     }else if($final == 5 || $final == 6){
        echo("Quarta-Feira <br>");
        echo("Carros com o final 5 e 6 podem circular...<br>");
        echo("Número inserido = ".$final);
     }else if($final == 7 || $final == 8){
        echo("Quinta-Feira <br>");
        echo("Carros com o final 7 e 8 podem circular...<br>");
        echo("Número inserido = ".$final);
     }else if($final == 9 || $final == 0){
        echo("Sexta-Feira <br>");
        echo("Carros com o final 9 e 0 podem circular...<br>");
        echo("Número inserido = ".$final);
     }
     echo ('<br>');
     echo ('<br> Testar novante só pra confimar kkk:  <a href="../NumeroPlaca/index.php"><button type="button"> Testar Denovo</button></a>');
     echo ('<br>');
     echo ('<br> Voltar para lista de Exercicios:         <a href="../index.html"><button type="button"> Clique Aqui Confia kkk</button></a>');

?>