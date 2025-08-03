<?php
function load_controller(array $arg): array
{
	$ctrl_name = $arg[0] . 'Controller';
	$file = BASE_PATH . "controllers/{$ctrl_name}.php";

	if (!file_exists($file))
		json_response(500, "Controller file '{$ctrl_name}.php' not found.");

	require_once $file;

	if (!class_exists($ctrl_name))
		json_response(500, "Class '{$ctrl_name}' not found in file.");

	return [new $ctrl_name, $arg[1] ?? 'main'];
}
