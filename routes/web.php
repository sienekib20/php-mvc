<?php

use Gbs\Kibo\Router\Anotation\Route;

Route::group(['auth' => 'authenticate'], function() {
	Route::add('GET', '/users', function() {
		echo 'Aqui o usr';
	});
});

Route::add('GET', '/', function() {
	echo 'Here';
});

Route::add('GET', '/login', function() {
	echo 'Logando';
});