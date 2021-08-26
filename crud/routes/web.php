<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });



$router->get('/select', 'DetailsController@selectAll');

$router->get('/select', ['middleware'=>'auth','uses'=>'DetailsController@selectAll']);




$router->post('/select', 'DetailsController@selectById');
$router->post('/insert', 'DetailsController@insert');
$router->delete('/delete','DetailsController@delete');
$router->put('/update', 'DetailsController@update');






// aggregates route

// $router->get('/count', 'DetailsController@count');
// $router->get('/min', 'DetailsController@min');
// $router->get('/max', 'DetailsController@max');
// $router->get('/avg', 'DetailsController@avg');
// $router->get('/sum', 'DetailsController@sum');
