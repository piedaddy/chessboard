<?php

class Square 
{
  protected $x_coord = null;
  protected $y_coord = null;
  protected $piece = null;


  public function __construct($x, $y, $piece=null) {
    $this->x_coord = $x;
    $this->y_coord = $y;
    $this->piece = $piece;
  }


  protected function isDark() {
    
    if ($this->x_coord%2===0 && $this->y_coord%2===0 || $this->x_coord%2===1 && $this->y_coord%2===1){
      return true;
    }
  }



  public function __toString(){
    $html= ''; 

    $class= null;
    if ($this->isDark()) {
      $class = 'dark';
    } else{
      $class = 'light';
    }
 
     $html .= "<div class=\"square {$class}\">";
     $html .= $this->piece;
     $html .='</div>';

    return $html; 
    //return "<div class=$class>$this->piece</div>"; // enhance this

  }


}