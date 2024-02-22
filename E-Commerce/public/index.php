<?php 
require '../vendor/autoload.php';
use Router\Router;

$url = $_GET['url'];
define('VIEWS',dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views'.DIRECTORY_SEPARATOR);
define('SCRIPTS',dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR );
define('DB_NAME',"e_commerce");
define('DB_HOST',"127.0.0.1");
define('DB_USER',"root");
define('DB_PASSWORD',"");

$router = new Router($url);

// Exemple de route simple POST ou GET : 
// $router->get/post('url','chemain du controller + @ methode');
$router->get('/orders', 'App\controllers\OrderManagementController@index');
$router->get('/orders/:id','App\controllers\OrderManagementController@show');
$router->post('/orders/delete/:id','App\controllers\OrderManagementController@destroy');

$router -> get('/productManagement', 'App\controllers\productManagementController@index');
$router -> get('/productManagement/edit/:id', 'App\controllers\productManagementController@edit');
$router -> post('/productManagement/edit/:id', 'App\controllers\productManagementController@update');
$router -> post('/productManagement/delete/:id', 'App\controllers\productManagementController@destroy');
$router -> get('/productManagement/create', 'App\controllers\productManagementController@create');
$router -> post('/productManagement/create', 'App\controllers\productManagementController@createProduct');

$router->get('/user_management','App\controllers\UserManagementController@index');
$router->post('/user_management/deleteUser/:id_user','App\controllers\UserManagementController@deleteUser');
$router->post('/user_management/changeUserRole/:id_user','App\controllers\UserManagementController@changeUserRole');
$router->post('/user_management/searchUser/','App\controllers\UserManagementController@researchUser');

try{
     $router->run(); 
} catch(\Exception $e) {
     return $e->error404();    
}   
