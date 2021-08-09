<?php


$router->group(['prefix' => 'internship'], function () use ($router) {
    $router->get('', ['uses'=> 'InternshipController@all']);
    $router->post('create', ['uses' => 'InternshipController@create']);
    $router->delete('delete/{id}', ['uses' => 'InternshipController@delete']);
    $router->put('/update/{id}', ['uses' => 'InternshipController@update']);
    $router->get('/view/{id}', ['uses' => 'InternshipController@view']);

});