<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - Integração PHP + HTML</title>
</head>
<body>
<div>


    <?php
    /* Aqui foi feito dois arquivos um html e outro php o de html com o nome de 01exercicios
    O arquivo em php com o nome de 01valor assim ligamos um ao outro cada um com uma fuçao
    html com os formulario e php com as ações*/
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo " A Raiz quadrada de:  $valor é:  ".number_format($rq,2);
    ?>
    <a href="01exercicios.html"> Voltar</a>
</div>
</body>
</html>
 