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
$router->get('/orderManagement/orders', 'App\controllers\OrderManagementController@index');
$router->get('/orderManagement/orders/:id','App\controllers\OrderManagementController@show');
$router->post('/orderManagement/orders/delete/:id','App\controllers\OrderManagementController@destroy');
$router->post('/orderManagement/orders/validate/:id','App\controllers\OrderManagementController@accept');
$router->post('/orderManagement/orders/validateOrder/:id','App\controllers\OrderManagementController@validate');
$router->post('/orderManagement/orders/archive/:id','App\controllers\OrderManagementController@archive');
$router->get('/orderManagement/archived', 'App\controllers\OrderManagementController@archived');

$router -> get('/productManagement', 'App\controllers\productManagementController@index');
$router -> get('/productManagement/edit/:id', 'App\controllers\productManagementController@edit');
$router -> post('/productManagement/edit/:id', 'App\controllers\productManagementController@update');
$router -> post('/productManagement/delete/:id', 'App\controllers\productManagementController@destroy');
$router -> get('/productManagement/create', 'App\controllers\productManagementController@create');
$router -> post('/productManagement/create', 'App\controllers\productManagementController@createProduct');

$router->get('/user_management','App\controllers\UserManagementController@index');
$router->post('/user_management/deleteUser/:Id_user','App\controllers\UserManagementController@deleteUser');
$router->post('/user_management/changeUserRole/:role','App\controllers\UserManagementController@deleteUser');

try{
     $router->run(); 
} catch(\Exception $e) {
    echo $e->getMessage();   
}   
