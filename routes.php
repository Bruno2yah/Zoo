<?php

include 'cors.php';

$routes = [
    '/' => 'HomeController@index',
    '/userTeste' => 'UserController@teste',
    '/user' => 'UserController@index',
    '/userDestroy' => 'UserController@destroy',
    '/userInsert' => 'UserController@store',
    '/userShow' => 'UserController@show',
    '/userUpdate' => 'UserController@update',
    '/userLogin' => 'UserController@checkCredentials',
    '/territorio' => 'TerritorioController@index',
    '/animal' => 'AnimalController@index',
    '/animalShow' => 'AnimalController@show',
    // Adicione outras rotas conforme necessário
];

return $routes;