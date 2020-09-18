<?php

use Illuminate\Http\Request;

if (isset($_SERVER['HTTP_ORIGIN'])) {
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: content-type, cache-control, postman-token, Authorization, X-Requested-With');
	header('Access-Control-Allow-Methods: GET,HEAD,PUT,PATCH,POST,DELETE');
	if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
		header('Content-Type: application/json');
		header('HTTP/1.1 204 OK');
		exit();
	}
}

Route::group(['prefix' => 'v1'], function () {

    Route::post('token', 'API\UserController@getToken');

    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('doctors', 'API\DoctorController@index');
    });
});
