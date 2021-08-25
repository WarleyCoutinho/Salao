<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Operadores de Atribuição</title>
</head>
<body>
<div>
    <?php
    // Ao abrir o projeto se quizer ver funcionando so digitar o valor na url
    // dessa forma depois do php digita ?p=5.50 e der enter.
       $preco = $_GET["p"];// pega valores digitados na url do navegador
       echo "O preco do produto e R$ " . number_format($preco, 2);
       //$preco = $preco + $preco*10/100; dessa forma funciona mais a linha de baixo e mais efiente e funciona do mesmo jeito
         $preco += $preco*10/100;//aqui ta tendo um aumento de 10%
       #$preco -= $preco*10/100;//aqui ta tendo um desconto de 10%
       echo "<br/>E o novo preco com 10% de aumento sera R$ " . number_format($preco, 2);
    ?>
</div>
</body>
</html>
 