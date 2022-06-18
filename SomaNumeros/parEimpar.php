<?php
$arm=$_POST['arm'];
$arm1=$_POST['arm1'];

for($i=0; $i<20; $i++){
    if($i % 2 == 0){
        $arm = $arm + $i;
    }else{
        $arm1 = $arm1 * $i;
}
}
echo("Números ímpars somados = ".$arm);
echo("<br> Números pares multiplicados = ".$arm1);

echo ('<br>');
     echo ('<br> Testar novante só pra confimar kkk:  <a href="../SomaNumeros/index.php"><button type="button"> Testar Denovo</button></a>');
     echo ('<br>');
     echo ('<br> Voltar para lista de Exercicios:         <a href="../index.html"><button type="button"> Clique Aqui Confia kkk</button></a>');

?>