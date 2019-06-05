<?php

use Slim\App;
use Slim\Http\Uri;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;
use Slim\Http\Environment;
use Slim\Views\TwigExtension;
use Medoo\Medoo;

return function (App $app) {

	//puedes pasar valores por un arreglo
	$app->get('/', function ($request, $response) {
		return $this->view->render($response, 'index.phtml');
	});

	//puedes recibir parametros por url
	$app->get('/tabla', function ($request, $response) {
		$arreglo  = [];
		for($i=0;$i<10;$i++)
			$arreglo[]="Item ".($i+1);
		return $this->view->render($response, 'tabla.html', [
			'items'=>$arreglo
		]);
	});

	$app->get('/regiones', function ($request, $response) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'regiones.html', [
			'regiones'=>$db->regiones()
		]);
	});
	$app->get('/ciudades', function ($request, $response) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'ciudades.html', [
			'ciudades'=>$db->ciudades()
		]);
	});
	$app->get('/provincias', function ($request, $response) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'provincias.html', [
			'provincias'=>$db->provincias()
		]);
	});

	$app->get('/provincia/{id}/ciudades', function ($request, $response,$args) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'ciudades.html', [
			'ciudades'=> $db->ciudades($args["id"])
		]);
	});

	$app->get('/region/{id}/provincias', function ($request, $response,$args) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'provincias.html', [
			'provincias'=> $db->provincias($args["id"])
		]);
	});

	$app->get('/region/{id}/ciudades', function ($request, $response,$args) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'ciudades.html', [
			'ciudades'=> $db->ciudadesByRegion($args["id"])
		]);
	});

	$app->get('/horoscopo', function ($request, $response,$args) {
		return $this->view->render($response, 'yoli.html');
	});

	$app->get('/busca_patente/{patente}', function ($request, $response, $args) {
		$url = 'https://9zvu5gs5a0.execute-api.us-west-2.amazonaws.com/dev/getPatente';
		//$data = array('action' => 'search_by_name', 'name' => $args["patente"]);
		$jsonData = array("patente" => $args["patente"]);

		// use key 'http' even if you send the request to https://...
		$options = array(
			'http' => array(
				'header'  => "Content-type: application/json\r\n",
				'method'  => 'POST',
				'content' => json_encode($jsonData)
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === FALSE) { /* Handle error */ }

		$jsonAuto = json_decode($result);

		//var_dump($jsonAuto);

		$salida = array(
			"Tipo" => $jsonAuto->data->tipoVehiculo,
			"Marca" => $jsonAuto->data->marca,
			"Modelo" => $jsonAuto->data->modelo,
			"Anio" => $jsonAuto->data->anno,
			"Patente" => $jsonAuto->data->patente,
			"NumMotor" => $jsonAuto->data->numeroMotor
		);
		//var_dump($salida);

		return $response->withJson($salida);
	});

	$app->get('/vehiculo', function ($request, $response, $args) {
		return $this->view->render($response, 'autos.html');
	});

	$app->get('/convert', function ($request, $response, $args) {
		return $this->view->render($response, 'divisa.html');
	});


   //radio cositas


	$app->get('/radio', function ($request, $response, $args) {
		return $this->view->render($response, 'noticia1.html');
	});

	
	$app->get('/not1', function ($request, $response, $args) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'not1.html', [
		'noticia1'=>$db->noticia1()
		]);
	});

	$app->get('/not2', function ($request, $response, $args) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'not2.html', [
		'noticia1'=>$db->noticia2()
		]);
	});

	$app->get('/not3', function ($request, $response, $args) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'not3.html', [
		'noticia1'=>$db->noticia3()
		]);
	});

	$app->get('/not4', function ($request, $response, $args) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'not4.html', [
		'noticia1'=>$db->noticia4()
		]);
	});


	$app->get('/not5', function ($request, $response, $args) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'not5.html', [
		'noticia1'=>$db->noticia5()
		]);
	});




};
