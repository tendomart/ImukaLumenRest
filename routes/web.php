<?php

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


// API route group
$router->group(['prefix' => 'api'], function () use ($router) {
    // Matches "/api/register
    $router->post('register', 'AuthController@register');
 
     // Matches "/api/login
     $router->post('login', 'AuthController@login');

     // Matches "/api/profile
    $router->get('profile', 'UserController@profile');

    // Matches "/api/user 
    //get one user by id
    $router->get('users/{id}', 'UserController@singleUser');

    // Matches "/api/users
    $router->get('users', 'UserController@allUsers');

      //these are for deals controller
      $router->post('deal','DealsController@createDeal');
      $router->put('deal/{id}','DealsController@updateDeal');
      $router->get('deal','DealsController@getAllDeals');
      $router->delete('deal/{id}','DealsController@deleteDeal');
      $router->get('deal','DealsController@index');
    
 });
 

$router->get('/', function () use ($router) {
    return $router->app->version();
});

