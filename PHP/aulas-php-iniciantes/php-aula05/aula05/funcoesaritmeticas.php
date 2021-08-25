<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Funcoes Aritmeticas em PHP</title>
  <style>
      h2 {
          font: 15pt Arial;
          color: red;
          font-weight: bold;
      }
  </style>
</head>
<body>
<div>
    <?php
     //Tem que repassar os valore na url do navegador pra funcionar exeplo embaixo;
    // depois do php digita ?x=4&y=8 e der enter.
    $v1 = $_GET["x"];//recebe valor da url que foi digitado pelo usuarurio
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 e " . abs($v2);
    echo "<br/>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);//Colocar dessa forma faz um numero em cima do outro <sup>$v2</sup>
    echo "<br/>A raiz de $v1 e " . sqrt($v1);
    echo "<br/>O valor de $v2 arredondado e " . round($v2); // ceil ou floor
    echo "<br/>A parte inteira de $v2 e " . intval($v2);
    echo "<br/>O valor de $v1 em moeda e R$" . number_format($v1,2,",", ".");
      
     
    ?>
</div>
</body>
</html>
 