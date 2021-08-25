<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Operacoes Aritmeticas</title>
</head>
<body>
<div>
    <?php
    #Aqui tem que passar os valoress para a url dessa forma;
    #Depois do php add ?a=3&b=7 e der enter pra funcionar.
    $n1 = $_GET["a"];//Puxa da url
    $n2 = $_GET["b"];//puxa da url
    echo "<h2>Valores recebidos: $n1 e $n2</h2>";
    $m = ($n1 + $n2) / 2;
    echo "A soma vale ". ($n1+$n2);
    echo "<br/>A subracao vale ". ($n1-$n2);
    echo "<br/>A multiplicacao vale ". ($n1*$n2);
    echo "<br/>A divisao vale ". number_format($n1/$n2,2);
    echo "<br/>O modulo vale ". ($n1%$n2);
    echo "<br/>A media vale $m";

    ?>
</div>
</body>
</html>
 