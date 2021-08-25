<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title> Visiabilidade de Atributos e Métodos </title>
</head>
<body>
<div>
  <pre>
    <?php
    /* Aqui foi declaro o corpo principal da classe Caneta e com o comando
    reuire_once fez a ligação da classe caneta com o index.php */
       require_once 'Caneta.php' ;

       $c1 = new Caneta;
       $c1 -> modelo = "Bic cristal";
       $c1 -> cor = "Vermelho";
       $c1 -> rabiscar();
       $c1 -> destampar();
       print_r($c1);
      
      
    ?>
    </pre>
</div>
</body>
</html>
 