<?php

$basePath = __DIR__ . '/../src/';
$route = filter_input(INPUT_GET, '_route_');
$file = $basePath . $route;

if (!$route || file_exists($file)) {
	require_once $route ? $file : ($basePath . 'index.php');
	return;
}

echo '<h1>Página não existe!!! :P</h1>';