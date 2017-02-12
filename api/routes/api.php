<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api){
    $api->get('/', function (){
        return response()->json('oi');
    });
});