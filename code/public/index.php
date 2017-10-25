<?php
$basePath = __DIR__ . '/../src/';
$route = filter_input(INPUT_GET, '_route_');
$file = $basePath . $route;

if ($route && file_exists($file)) {
	require_once $file;
}