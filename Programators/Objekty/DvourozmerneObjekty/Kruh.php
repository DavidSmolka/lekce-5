
<?php
class Kruh implements DvourozmernyObrazec
{
  private $polomer;
    
  public function __construct($polomer)
  {
    $this->polomer = $polomer;
  }
 public function ziskejPolomer()
 {
   return $this->polomer;
 }
  public function ziskejObsah()
  {
    return $this->polomer * $this->polomer * M_PI; 
  }
}
  
