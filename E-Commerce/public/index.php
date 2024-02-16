<?php 
require '../vendor/autoload.php';
use Router\Router;

$url = $_GET['url'];
define('VIEWS',dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views'.DIRECTORY_SEPARATOR);
define('SCRIPTS',dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR );
define('DB_NAME',"base_test");
define('DB_HOST',"127.0.0.1");
define('DB_USER',"root");
define('DB_PASSWORD',"");

$router = new Router($url);

// Exemple de route simple POST ou GET : 
// $router->get/post('url','chemain du controller + @ methode');
$router->get('/orders', 'App\controllers\OrderManagmentController@index');

try{
     $router->run(); 
} catch(\Exception $e) {
     return $e->error404();    
}   
