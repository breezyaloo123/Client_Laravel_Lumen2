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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('etudiants',  ['uses' => 'EtudiantController@showAllEtudiants']);
  
    $router->get('etudiants/{id}', ['uses' => 'EtudiantController@showOneEtudiant']);
  
    $router->post('etudiants', ['uses' => 'EtudiantController@create']);
  
    $router->delete('etudiants/{id}', ['uses' => 'EtudiantController@delete']);
  
    $router->put('etudiants/{id}', ['uses' => 'EtudiantController@update']);
  });
