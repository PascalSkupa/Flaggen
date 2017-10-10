<?php

/**
 * Class Flag
 * The bse for all Flags
 */

abstract class Flag{
  private $bezeichnung;
  private $farbe;
  private $form;

  /**
     * @return string
     */
    public function getBezeichnung(): string
    {
        return $this->bezeichnung;
    }

    /**
     * @return string
     */
    public function getFarbe(): string
    {
        return $this->farbe;
    }

    /**
     * @return string
     */
    public function getForm(): string
    {
        return $this->form;
    }

    /**
   * Flags constructo.
   * @param string
   * @param string
   */
  public function __construct(string $bezeichnung, string $farbe, string $form){
      $this->bezeichnung = $bezeichnung;
      $this->farbe = $farbe;
      $this->form = $form;
   }
   /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getBezeichnung() . " " . $this->getFarbe(). " " . $this->getForm();
    }
}
