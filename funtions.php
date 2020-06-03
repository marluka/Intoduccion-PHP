<?php

function printJob($job){
  if ($job->visible == false) {
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>'.$job->getTitle().'</h5>';
  echo '<p>'.$job->description.'</p>';
  echo '<p>'.getDuration($job->months).'</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}

function getDuration($months){
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
