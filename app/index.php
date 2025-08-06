<?php
const BASE_PATH = __DIR__ . '/';
require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . 'utils/json_response.php';
require BASE_PATH . 'utils/load_controller.php';
require BASE_PATH . 'routes.php';

use FastRoute\RouteCollector;

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) use ($routes): void {
	foreach ($routes as $method => $routeGroup)
		foreach ($routeGroup as $path => $handler)
			$r->addRoute($method, $path, $handler);
});

$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$route_info = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $uri);

switch ($route_info[0]) {
	case FastRoute\Dispatcher::NOT_FOUND:
		json_response(404, 'Page not found');
	case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
		json_response(405, 'Method not allowed');
	default:
		json_response(500, 'Unknown routing error');
	case FastRoute\Dispatcher::FOUND:
		global $ctrl;
		[$ctrl, $method] = load_controller($route_info[1]);
		$ctrl->$method($route_info[2]);
}
