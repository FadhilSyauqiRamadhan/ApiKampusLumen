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
$router->group(['prefix' => 'api/kampus'], function () use ($router) {
    $router->get('/', 'kampusController@index');
    $router->get('/{id}', 'kampusController@show');
    $router->post('/', 'kampusController@store');
    $router->put('/{id}', 'kampusController@update');
    $router->delete('/{id}', 'kampusController@destroy');
});
