<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jugador dado</title>
  </head>
  <body>
  <?php

  class jugadorDado
  {

  private $minNumDado=0;
  private $maxNumDado=12;

  public function setminNumDado($minNumDado){
    $this->minNumdado=$minNumDado;
  }
  public function setmaxNumDado($maxNumDado){
    $this->maxNumDado=$maxNumDado;
  }

  public function getminNumDado(){
    return $this->minNumDado;
  }

  public function getmaxNumDado(){
    return $this->maxNumDado;
  }

  public function tirarDado(){
    return $this->tirarDado=rand($this->minNumDado,$this->maxNumDado);
  }


}

   ?>
  </body>
</html>
