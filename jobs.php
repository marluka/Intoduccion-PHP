<?php 

class Job {
  private $title;
  public $description;
  public $visible;
  public $months;

  public function getTitle(){
    return $this->title;
  }

  public function setTitle($title){
    $this->title = $title;
  }

}

$job1 = new Job();
$job1->setTitle('PHP Developer');
$job1->visible = true;
$job1->months = 16;
$job1->description = 'This is an awesome job!!!';

$job2 = new Job();
$job2->setTitle('Python Dev');
$job2->visible = false;
$job2->months = 14;
$job2->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
//                     Nisi sapiente sed pariatur sint exercitationem eos expedita.';

$job = [
  $job1,
  $job2
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