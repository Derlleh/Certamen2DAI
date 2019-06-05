<?php
namespace Modelo;

class Database{

	private $database;

	public function __construct($container)
	{
		$this->database = $container->database;
	}

	public function datos(){
		$arr = $this->database->select('chiquillos', ['id', 'nombre']);
		return $arr;
	}

	public function noticia1(){
		$arr = $this->database->select('noticia1',['titulo1', 'lead1',
			'cuerpo1', 'estado1', 'idnoticia1'], ["idnoticia1"=>1]);
		return $arr;
	}

	public function noticia2(){
		$arr = $this->database->select('noticia1',['titulo1', 'lead1',
			'cuerpo1', 'estado1', 'idnoticia1'], ["idnoticia1"=>2]);
		return $arr;
	}

	public function noticia3(){
		$arr = $this->database->select('noticia1',['titulo1', 'lead1',
			'cuerpo1', 'estado1', 'idnoticia1'], ["idnoticia1"=>3]);
	return $arr;
	}

	public function noticia4(){
		$arr = $this->database->select('noticia1',['titulo1', 'lead1',
			'cuerpo1', 'estado1', 'idnoticia1'], ["idnoticia1"=>4]);
	return $arr;
	}

	public function noticia5(){
		$arr = $this->database->select('noticia1',['titulo1', 'lead1',
			'cuerpo1', 'estado1', 'idnoticia1'], ["idnoticia1"=>5]);
	return $arr;
	}



}