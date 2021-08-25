<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>INCREMENTO</title>
</head>
<body>
<div>
    <?php
       /* Esse exercicio
       pretende demonstrar o uso
       de operadores de incremento
       e decremento */
       #digita na url o ano refernte que vc ta ano atual 
       #exemplo digita na url depois do php ?aa=2021
       
     $atual = $_GET["aa"];# Essa linha vai pegar o ano na URL
     echo"<h2> Ano Atual É: $atual</h2>";
     echo " <h6>Ano Passado Foi: </h6>".--$atual;
       //echo" <br/> Ano Atual é: ".date("d-M-Y");#pega ano atual mês e dia se quizer so um das ops coloca so umas das letras
    ?>
</div>
</body>
</html>
 