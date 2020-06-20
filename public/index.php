<?php

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_NAME'],
    'username'  => $_ENV['DB_USER'],
    'password'  => $_ENV['DB_PASS'],
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

$ruta = "/09-INTRODUCCION-PHP/Repositorio";
$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', $ruta.'/', [
  'controller' => 'App\Controllers\IndexController',
  'action' => 'indexAction'
]);

$map->get('addJob', $ruta.'/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJob',
  'auth' => true
]);
$map->post('saveJob', $ruta.'/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJob'
]);

$map->get('addProject', $ruta.'/projects/add', [
  'controller' => 'App\Controllers\ProjectsController',
  'action' => 'getAddProject',
  'auth' => true
]);
$map->post('saveProject', $ruta.'/projects/add', [
  'controller' => 'App\Controllers\ProjectsController',
  'action' => 'getAddProject'
]);

$map->get('addUser', $ruta.'/users/add', [
  'controller' => 'App\Controllers\UsersController',
  'action' => 'getAddUser',
  'auth' => true
]);
$map->post('saveUser', $ruta.'/users/add', [
  'controller' => 'App\Controllers\UsersController',
  'action' => 'getAddUser'
]);

$map->get('loginForm', $ruta.'/login', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'getLogin'
]);
$map->get('logout', $ruta.'/logout', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'getLogout'
]);

$map->post('auth', $ruta.'/auth', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'postLogin'
]);

$map->get('admin', $ruta.'/admin', [
  'controller' => 'App\Controllers\AdminController',
  'action' => 'getIndex',
  'auth' => true
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
  $needsAuth = $handlerData['auth'] ?? false;

  $sessionUserId = $_SESSION['userId'] ?? null;
  if ($needsAuth && ! $sessionUserId) {
      header('Location: /09-INTRODUCCION-PHP/Repositorio/login');
      exit;
  }

  /* intancia de clase basada en una cadena */
  $controller = new $controllerName;
  $response = $controller->$actionName($request);
  foreach ($response->getHeaders() as $name => $values) {
    foreach ($values as $value) {
      header(sprintf('%s: %s', $name, $value), false);
    }
  }
  http_response_code($response->getStatusCode());
  echo $response->getBody();
}