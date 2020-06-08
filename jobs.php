<?php 

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';

require 'lib1/Project.php';

use App\Models\{Job, Project};

$job1 = new Job('PHP Developer','This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Dev','This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Devops','This is an awesome job!!!');
$job3->months = 32;

$project1 = new Project('Project 1', 'Description 1');

$projectLib = new Lib1\Project();

$job = [
  $job1,
  $job2,
  $job3
];

$projects = [
  $project1
];