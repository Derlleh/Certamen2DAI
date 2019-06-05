<?php

use Slim\App;
use Slim\Http\Uri;
use Slim\Views\Twig;
use Slim\Http\Environment;
use Slim\Views\TwigExtension;
use Medoo\Medoo;


return function (App $app) {
	$container = $app->getContainer();

	$container['view'] = function ($c) {
		$view = new Twig('../templates');
	
		// Instancia y añade la extensión
		$router = $c->get('router');
		$uri = Uri::createFromEnvironment(new Environment($_SERVER));
		$view->addExtension(new TwigExtension($router, $uri));

		return $view;
	};
	
	$container['database'] = function () {
		return new Medoo([
			'database_type' => 'mysql',
			'database_name' => 'radiovaio',
			'server' => 'localhost:3306',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8'
		]); 
	};

	$container['logger'] = function ($c) {
		$settings = $c->get('settings')['logger'];
		$logger = new \Monolog\Logger($settings['name']);
		$logger->pushProcessor(new \Monolog\Processor\UidProcessor());
		$logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
		return $logger;
	};
};
