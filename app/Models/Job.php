<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

  protected $table = 'jobs';

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