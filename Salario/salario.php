<?php
        /*
        Criar uma página que leia o salário de um funcionário e o departamento que ele trabalha.
         Para o departamento Operacional, o aumento será de 15%. Para o departamento 
         de desenvolvimento deverão ser aplicadas as seguintes regras: 
        para 1.500,00 <= salarioAtual < 1.750,00: aumento igual a 12% 
        para 1.750,00 <= salarioAtual < 2.000,00: aumento igual a 10% 
        para 2.000,00 <= salarioAtual < 3.000,00: aumento igual a 7% 
        para acima de 3.000,00: aumento igual a 5%. 
        */

        $salario = $_POST['salario'];
        $porcentagem=0;

        if($salario >= 1500 && $salario < 1750){
            $porcentagem = (12.0 * $salario) / 100;
            echo("Porcentagem = 12% <br>");
            $salario = $salario + $porcentagem;
            echo('Acrescimo = '. $porcentagem);
            echo("<br>SalárioAtual = " .$salario);
        }else if($salario >= 1750 && $salario < 2000){
            $porcentagem = (10.0 * $salario) / 100;
            echo("Porcentagem = 10% <br>");
            $salario = $salario + $porcentagem;
            echo('Acrescimo = '. $porcentagem);
            echo("<br>SalárioAtual = " .$salario);
        }else if($salario >= 2000 && $salario <= 3000){
            $porcentagem = (7.0 * $salario) / 100;
            echo("Porcentagem = 7% <br>");
            $salario = $salario + $porcentagem;
            echo('Acrescimo = '. $porcentagem);
            echo("<br>SalárioAtual = " .$salario);
        }else if($salario > 3000){
            $porcentagem = (5.0 * $salario) / 100;
            echo("Porcentagem = 5% <br>");
            $salario = $salario + $porcentagem;
            echo('Acrescimo = '. $porcentagem);
            echo("<br>SalárioAtual = " .$salario);
        }else if($salario < 1500){
            $porcentagem = (15.0 * $salario) / 100;
            echo("Porcentagem = 15% <br>");
            $salario = $salario + $porcentagem;
            echo('Acrescimo = '. $porcentagem);
            echo("<br>SalárioAtual = " .$salario);
        }
        echo ('<br>');
     echo ('<br> Testar novante só pra confimar kkk:  <a href="./index.php"><button type="button"> Testar Denovo</button></a>');
     echo ('<br>');
     echo ('<br> Voltar para lista de Exercicios:         <a href="../index.html"><button type="button"> Clique Aqui Confia kkk</button></a>');

        ?>
