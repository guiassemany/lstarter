<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api){
    $api->group(['prefix' => 'auth', 'namespace' => 'LStarter\Modules\Auth\Http\Controllers'], function($api){
        $api->post('authenticate', 'AuthController@authenticate');
    });
});

