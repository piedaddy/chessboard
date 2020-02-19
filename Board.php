<?php

class Board 
{

  protected $positions = [];

  public function __construct(){
    if (is_string($positions)) {
      $this->positions = $positions;
    } else {
      $this->positions = $positions;
    }

  }

  public function __toString(){
    // echo '<table width="720px" cellspacing="0px" cellpadding="0px">';
    // for($i = 0;$i< 8; $i++) {
    //   echo '<tr>';
    //     for($j = 0; $j< 8; $j++) {
    //       echo '<td height=45px width=45px></td>';
    //     }
    //   echo '</tr>';
    // }
    // echo '</table>';

    $html = ''; 
    $html .= '<div class="board">';

    for($y = 1;$i<= 8; $i++) {
      for($x = 1; $x<= 8; $x++) {

        if(isset($this->positions[$x][$y])) {
          $piece = new Piece($this->positions[$x][$y]);
        } else {
          $piece = null;
        }
        $square  = new Square($x, $y, $piece);
        $html .=$square;
      }
      $html .= '</div>';
      return $html;
      }
  }

}