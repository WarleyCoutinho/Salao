<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP-POO-Clases e Objetos </title>
</head>
<body>
<div>
  <pre>
    <?php
    require_once 'Cama.php' ;
     $ca = new Cama;
     $ca -> casal = "2 Pessoas";
     $ca -> box = "Azul";
     $ca -> ocupado();
     $ca -> dormir();
     print_r($ca);
    echo"</br/>";
     $ca2 = new Cama;
     $ca2 -> solteiro = "1 Pessoa";
     $ca2-> box = "vermelho";
     $ca2 -> modelo = "madeira";
     $ca2 -> livre();
     $ca2 -> dormir();
     print_r($ca2);

    ?>
    </pre>
</div>
</body>
</html>
 