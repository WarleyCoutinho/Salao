<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - VARIAVEIS DE VARIAVEIS</title>
</head>
<body>
<div>
    <?php
    /* Variaveis de variaveis sendo as duas do mesmo nome $x e $$x 
    sendo assim a variavel de x pasarar  a ser outar variavel 
    recebendo o valor da variavel $$x */
       $x = "warley";# x e uma variavel e warley torna outra variavel
       $$x = "cleude";# warley torna variavel e recebe o valor de $$x com todo seu conteudo
       echo" O conteudo da variavel X é: $x";
       echo"<br/> Avariavel de WARLEY criada recebeu o Valor de:  $warley";

    ?>
</div>
</body>
</html>
 