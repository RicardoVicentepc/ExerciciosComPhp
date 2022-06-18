<?php
    
        /*
        Desenvolva uma página que a partir de três números inteiros e determine
        qual é o menor e qual é o maior.  
        */ 
        
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        if($n1 > $n2 && $n1 > $n3){
            echo($n1." é o número maior entre os três");
        }else if($n2 > $n1 && $n2 > $n3){
            echo($n2." é o número maior entre os três");
        }else if($n3 > $n1 && $n2){
            echo($n3." é o número maior entre os três");
        }
        
        
        
        if($n1 < $n2 && $n1 < $n3){
            echo("<br>".$n1." é o número menor entre os três");
        }else if($n2 < $n1 && $n2 < $n3){
            echo("<br>".$n2." é o número menor entre os três");
        }else if($n3 < $n1 && $n2){
            echo("<br>".$n3." é o número menor entre os três");
        }


        echo ('<br>');
        echo ('<br> Testar novante só pra confimar kkk:  <a href="../NumeroInteiro/index.php"><button type="button"> Testar Denovo</button></a>');
        echo ('<br>');
        echo ('<br> Voltar para lista de Exercicios:         <a href="../index.html"><button type="button"> Clique Aqui Confia kkk</button></a>');
?>