<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api){
    $api->group(['prefix' => 'core', 'namespace' => 'LStarter\Modules\Core\Http\Controllers'], function($api){
        $api->get('/', 'CoreController@index');
    });
});
