<?php 

require 'app/Models/Job.php';
require 'app/Models/Project.php';

$job1 = new Job('PHP Developer','This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Dev','This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Devops','This is an awesome job!!!');
$job3->months = 32;

$project1 = new Project('Project 1', 'Description 1');


$job = [
  $job1,
  $job2,
  $job3
];

$projects = [
  $project1
];