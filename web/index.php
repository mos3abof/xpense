<?php

// Require composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

// Require symfony components.
use Symfony\Component\HttpFoundation\Response;

// Initiate an object of Silex Application.
$app = new Silex\Application();

// Set debug to true.
$app['debug'] = true;

// Set a default root for the home page.
$app->get('/', function() {

	$message = '<h2>Hello, world!</h2>';

	return new Response($message, 200);
});

// Run the application.
$app->run();