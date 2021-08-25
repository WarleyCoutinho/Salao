<?php

class Cama {
 var  $solteiro;
 var $casal;
 var $box;
 var $modelo;
 var $deitar;

 function dormir (){
  if($this -> deitar == true){
    echo"<p> ERRO!!! Não posso deitar e nem dormir!</p>"; 
  }else{
    echo"<p>Então já posso dormir!</p>";
  }
 }
 function ocupado (){
  $this->deitar=true;
 }
 function livre (){
$this->deitar=false;
 }

}


