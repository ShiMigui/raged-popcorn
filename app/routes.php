<?php
$routes = [
	'GET' => [
		'/home' => ['Home'],
		'/auth' => ['Auth'],
		'/movie/{id:\d+}' => ['Movie'],
	],
	'POST' => [
		'/auth/signin' => ['Auth', 'signin'],
		'/auth/signup' => ['Auth', 'signup'],
	],
];
$routes['GET']['/'] = $routes['GET']['/home'];
