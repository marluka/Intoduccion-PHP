<?php

namespace App\Models;
require_once 'BaseElement.php';

class Job extends BaseElement {

  public function __construct($title, $description) {
    $newTitle = 'Job: '. $title;
    // parent::__construct($newTitle, $description);  /* constructor padre */
    $this->title = $newTitle; /* en caso q declaremos el atributo como protected */

  }

  public function getDurationAsString(){
    $years = floor($this->months / 12);
    $extraMonts = $this->months % 12;
    if ($years == 0) {
      return "$extraMonts months";
    }elseif ($extraMonts == 0) {
      return "$years years";
    }else{
       return "Job duration: $years years $extraMonts months";
    }
  }

 

}