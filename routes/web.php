<?php

// /** @var \Laravel\Lumen\Routing\Router $router */
use Laravel\Lumen\Routing\Router;

use App\Http\Controllers\AuthorController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix '=> 'api'] , function() use ($router){
    $router->get('authors', ['uses' => 'AuthorController@showAllAuthors']);

    $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);

    $router->post('authors', ['uses' => 'AuthorController@create']);

    $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);

    $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
});
