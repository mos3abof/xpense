<?php

// Require composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

// Require symfony components.
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

// Initiate an object of Silex Application.
$app = new Silex\Application();

// Register templates directory.
$app->register(new Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__ . '/../views',
));

// Set debug to true.
$app['debug'] = true;

// Set a default root for the home page.
$app->get('/', function() use ($app) {
	return $app['twig']->render('login.twig', array());
});

// Set an endpoint for api
$app->get('/api/1/', function(){
	$result = array('msg' => 'Hello, world!');
	return new JsonResponse($result);
});

// Run the application.
$app->run();