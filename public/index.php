<?php

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
  $_SERVER,
  $_GET,
  $_POST,
  $_COOKIE,
  $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', '/09-INTRODUCCION-PHP/Repositorio/', [
  'controller' => 'App\Controllers\IndexController',
  'action' => 'indexAction'
]);
$map->get('addJob', '/09-INTRODUCCION-PHP/Repositorio/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJobAction'
]);
$map->post('saveJob', '/09-INTRODUCCION-PHP/Repositorio/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJobAction'
]);
$map->get('addProject', '/09-INTRODUCCION-PHP/Repositorio/projects/add', [
  'controller' => 'App\Controllers\ProjectsController',
  'action' => 'getAddProjectAction'
]);
$map->post('saveProject', '/09-INTRODUCCION-PHP/Repositorio/projects/add', [
  'controller' => 'App\Controllers\ProjectsController',
  'action' => 'getAddProjectAction'
]);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

function printJob($job){

  // if ($job->visible == false) {
  //   return;
  // }

  echo '<li class="work-position">';
  echo    '<h5>'.$job->title.'</h5>';
  echo    '<p>'.$job->description.'</p>';
  echo    '<p>'.$job->getDurationAsString().'</p>';
  echo    '<strong>Achievements:</strong>';
  echo    '<ul>';
  echo      '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo      '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo      '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo    '</ul>';
  echo '</li>';
}

function printProject($project){

  echo '<div class="project">';
  echo '  <h5>'.$project->title.'</h5>';
  echo '  <div class="row">';
  echo '    <div class="col-3">';
  echo '      <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
  echo '    </div>';
  echo '    <div class="col">';
  echo '      <p>'.$project->description.'</p>';
  echo '      <strong>Technologies used:</strong>';
  echo '      <span class="badge badge-secondary">PHP</span>';
  echo '      <span class="badge badge-secondary">HTML</span>';
  echo '      <span class="badge badge-secondary">CSS</span>';
  echo '    </div>';
  echo '  </div>';
  echo '</div>';
}

if (!$route) {
  echo 'No route';
}else {
  $handlerData = $route->handler;
  $controllerName = $handlerData['controller'];
  $actionName = $handlerData['action'];

  /* intancia de clase basada en una cadena */
  $controller = new $controllerName;
  $response = $controller->$actionName($request);
  
  echo $response->getBody();
}