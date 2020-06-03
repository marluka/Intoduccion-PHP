<?php 

function printJob($job){
  if ($job['visible'] == false) {
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>'.$job['title'].'</h5>';
  echo '<p>'.$job['description'].'</p>';
  echo '<p>'.duration($job['months']).'</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}

function duration($months){
  $years = floor($months / 12);
  $extraMonts = $months % 12;
  if ($years == 0) {
    return "$extraMonts months";
  }elseif ($extraMonts == 0) {
    return "$years years";
  }else{
     return "$years years $extraMonts months";
  }
}

$job = [
  [
    'title' => 'PHP Developer',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Nisi sapiente sed pariatur sint exercitationem eos expedita 
                      eveniet veniam ullam, quia neque facilis dicta voluptatibus. 
                      Eveniet doloremque ipsum itaque obcaecati nihil.',
    'visible' => true,
    'months' => 16
  ],
  [
    'title' => 'Python Dev',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Nisi sapiente sed pariatur sint exercitationem eos expedita 
                      eveniet veniam ullam, quia neque facilis dicta voluptatibus. 
                      Eveniet doloremque ipsum itaque obcaecati nihil.',
    'visible' => false,
    'months' => 14
  ],
  [
    'title' => 'Devops',
    'description' => '',
    'visible' => true,
    'months' => 5
  ],
  [
    'title' => 'Node Dev',
    'description' => '',
    'visible' => true,
    'months' => 24
  ],
  [
    'title' => 'Frontend Dev',
    'description' => '',
    'visible' => true,
    'months' => 3
    ]
];