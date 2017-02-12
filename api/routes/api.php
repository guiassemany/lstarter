<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['middleware' => 'bindings'], function ($api) {

    $api->get('dummy', function (){
        return 'dummy';
    });

});