<?php

declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$fullPath = __DIR__ . '/src' . $path;

if ($path !== '/' && file_exists($fullPath)) {
    return false;
}

$_GET['path'] = ltrim($path, '/');

require __DIR__ . '/src/index.php';
