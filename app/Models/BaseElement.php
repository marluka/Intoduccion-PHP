<?php

require_once 'Printable.php';

class BaseElement implements Printable {
  /* protected: propiedad privada, sólo con acceso las clases hijas */
  /* private: no se puede acceder a esa propiedad fuera de la clase */
  /* public: se puede acceder a esa propiedad desde fuera */

  protected $title;
  public $description;
  public $visible = true;
  public $months;

  public function __construct($title, $description) {
    $this->setTitle($title);
    $this->description = $description;
  }

  public function getTitle(){
    return $this->title;
  }

  public function setTitle($title){
    if ($title=='') {
      $this->title = 'N/A';
    }else {
      $this->title = $title;
    }
    
  }

  public function getDurationAsString(){
    $years = floor($this->months / 12);
    $extraMonts = $this->months % 12;
    if ($years == 0) {
      return "$extraMonts months";
    }elseif ($extraMonts == 0) {
      return "$years years";
    }else{
       return "$years years $extraMonts months";
    }
  }

  public function getDescription(){
    return $this->description;
  }

}
