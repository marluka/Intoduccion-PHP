<?php 

class Job {
  private $title;
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

}

$job1 = new Job('PHP Developer','This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Dev','This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Devops','This is an awesome job!!!');
$job3->months = 32;


$job = [
  $job1,
  $job2,
  $job3
  // [
  //   'title' => 'PHP Developer',
  //   'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
  //                     Nisi sapiente sed pariatur sint exercitationem eos expedita 
  //                     eveniet veniam ullam, quia neque facilis dicta voluptatibus. 
  //                     Eveniet doloremque ipsum itaque obcaecati nihil.',
  //   'visible' => true,
  //   'months' => 16
  // ],
  // [
  //   'title' => 'Python Dev',
  //   'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
  //                     Nisi sapiente sed pariatur sint exercitationem eos expedita 
  //                     eveniet veniam ullam, quia neque facilis dicta voluptatibus. 
  //                     Eveniet doloremque ipsum itaque obcaecati nihil.',
  //   'visible' => false,
  //   'months' => 14
  // ],
  // [
  //   'title' => 'Devops',
  //   'description' => '',
  //   'visible' => true,
  //   'months' => 5
  // ],
  // [
  //   'title' => 'Node Dev',
  //   'description' => '',
  //   'visible' => true,
  //   'months' => 24
  // ],
  // [
  //   'title' => 'Frontend Dev',
  //   'description' => '',
  //   'visible' => true,
  //   'months' => 3
  //   ]
];