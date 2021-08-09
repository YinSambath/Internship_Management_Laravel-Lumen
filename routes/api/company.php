<?php


$router->group(['prefix' => 'company'], function () use ($router) {
    $router->get('', ['uses'=> 'CompanyController@all']);
    $router->post('create', ['uses' => 'CompanyController@create']);
    $router->delete('delete/{id}', ['uses' => 'CompanyController@delete']);
    $router->put('/update/{id}', ['uses' => 'CompanyController@update']);
    $router->get('/view/{id}', ['uses' => 'CompanyController@view']);

});