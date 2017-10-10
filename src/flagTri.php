<?php

require_once "flag.php";
require_once "flagInterface.php";

class flagTri extends flag implements flagInterface{

  private $base;
  private $height;

  /**
 * Flags constructo.
 * @param string
 * @param string
 */
public function __construct(string $bezeichnung, string $farbe, string $form, int $base, int $height){
      parent::__construct($bezeichnung, $farbe, $form);
      $this->base = $base;
      $this->height = $height;
 }

 /**
   * @return float Area of the Flag
   */
  public function getArea(): float
  {
// (c * hc) / 2
      return Round(($this->base * $this->height)/2,2);
  }
}
