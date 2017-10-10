<?php

require_once "flag.php";
require_once "flagInterface.php";

class flagRec extends flag implements flagInterface{

  private $length;
  private $height;

  /**
 * Flags constructo.
 * @param string
 * @param string
 */
public function __construct(string $bezeichnung, string $farbe, string $form, int $length, int $height){
      parent::__construct($bezeichnung, $farbe, $form);
      $this->length = $length;
      $this->height = $height;
 }

 /**
   * @return float Area of the Flag
   */
  public function getArea(): float
  {
// länge * breite
      return $this->length * $this->height;
  }
}
