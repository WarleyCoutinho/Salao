<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>REFERÊNCIA EM VARIAVEL</title>
</head>
<body>
<div>
    <?php
   
/* Passando uma referncia a outra variavel assim tanto faz
    se alterar um valor em qulquer umas elas ambas vao somar e ser alterados os 
    seus valores nas variaves que estao sendo refernciadas ficados as duas com os memsmos valores */
    $a = 3;
    $b = &$a;# se colocar  & para fazer a refernça em a 
    $b += 5;/* se de coloca += na b ela fica sendo referencial a variavel
     a e as duas passar a ficar com os mesmos valores*/
    echo "A variavel A vale $a";
    echo "<br/>A variavel B vale $b";
    ?>
</div>
</body>
</html>
 