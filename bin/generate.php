<?php

require 'vendor/autoload.php';

use Philo\Blade\Blade;
use Carbon\Carbon;

$dir = [
	'views' => __DIR__ . '/../resources/views',
	'cache' => __DIR__ . '/../cache',
	'dist' => __DIR__ . '/../dist'
];

$views = [
	'index'
];

$blade = new Blade($dir['views'], $dir['cache']);

$blade->view()->share([
	'version' => time()
]);

// Home
$html = $blade->view()->make('index', [
    'movies' => include('config/movies.php')
]);
file_put_contents($dir['dist'] . '/index.html', $html);
