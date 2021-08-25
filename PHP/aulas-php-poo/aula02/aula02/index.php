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
    /* Aqui foi declaro o corpo principal da classe Caneta e com o comando
    reuire_once fez a ligação da classe caneta com o index.php */
       require_once 'Caneta.php' ;

       $c1 = new Caneta;
       $c1 -> cor ="azul";
       $c1 -> ponta = 0.5;
       //$c1 -> tampada = false;# metodo chamada direto o proprio objeto.
       $c1 -> tampar();# Metodo tampar que foi declarado na classe caneta
       //$c1 -> destampar();# Metodo tampar que foi declarado na classe caneta
       $c1 -> rabiscar();
       print_r($c1); # mostrar na tela casso queira ver como ta ficando 
       echo"<br/>";
       /* Posso criar o quanto de objeto for presciso sendo da mesma classe
        exemplo abaixo:
        */
       $c2 = new Caneta;
       $c2 -> cor ="Verde";
       $c2 -> carga = "50%";
       $c2 -> destampar();
       $c2 -> rabiscar();

       print_r($c2); # mostrar na tela casso queira ver como ta ficando 

    ?>
    </pre>
</div>
</body>
</html>
 