<?php


$app->get( 'token', 'App\Http\Controllers\TokenController@getToken' );

$app->delete( 'token', 'App\Http\Controllers\TokenController@deleteToken' );

$app->put( 'token', 'App\Http\Controllers\TokenController@putToken' );


$app->group( ['prefix' => 'v1/user'], function () use ( $app ) {
    $app->get( 'info', 'App\Http\Controllers\Student\InfoController@index' );
} );

