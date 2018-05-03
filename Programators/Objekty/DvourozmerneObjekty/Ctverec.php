<?php 
class Ctverec extends Obdelnik
{
  
  private $a;
  
  public function __construct($a)
  {
    $this->a = $a;
     parent::__construct($a, $a);
  }
}