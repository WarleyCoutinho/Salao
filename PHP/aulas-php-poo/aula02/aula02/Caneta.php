<?php
/* Aqui foi declaro uma classe  */
class Caneta {
  var $modelo;
  var $cor ;
  var $ponta ;
  var $carga ;
  var $tampada;

/* Aqui foi declaro os metodos da clases funcionalidades  */
function rabiscar () {
  if($this -> tampada == true){
     echo"<p>Não posso rabiscar</p>";

  }else{
    echo "<p>Estou rabiscando...</p>";
  }
}

function tampar (){
 $this->tampada=true;
}

function destampar (){
  $this->tampada=false;
}

}

