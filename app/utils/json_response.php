<?php
function json_response(int $code, string $message, bool $status = false): void
{
	http_response_code($code);
	header('Content-Type: application/json');
	echo json_encode([
		'status' => $status,
		'code' => $code,
		'message' => $message,
	]);
	exit;
}
