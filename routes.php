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
    // Adicione outras rotas conforme necessário
];

return $routes;