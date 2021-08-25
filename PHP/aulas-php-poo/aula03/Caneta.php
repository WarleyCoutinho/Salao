<?php
/* Aqui foi declaro uma classe  */
class Caneta {
  public $modelo;
  public $cor ;
  private $ponta ;
  protected $carga ;
  protected $tampada;

/* Aqui foi declaro os metodos da clases funcionalidades  */
 public function rabiscar () {
  if($this -> tampada == true){
     echo"<p>Não posso rabiscar</p>";

  }else{
    echo "<p>Estou rabiscando...</p>";
  }
}

public function tampar (){
 $this->tampada=true;
}

public function destampar (){
  $this->tampada=false;
}

}


