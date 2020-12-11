<?php namespace App\Controllers;

use App\Models\bd_model;

class Ctrl extends BaseController
{
	public function index()
	{
		return view('formulario');
	}
	/*public function object()
	{
		$request = \Config\Services::request();
		$nombre = $request -> getPost('first_name');
		$apellido = $request -> getPost('last_name');
		$correo = $request -> getPost('email');
		$telefono = $request -> getPost('phone');
		$contrasena = $request -> getPost('password');
		$dato = [
			'nombre' => $nombre,
			'apellido' => $apellido,
			'correo' => $correo,
			'telefono' => $telefono,
			'contrasena' => $contrasena
		];
		$modelito = new bd_model($db);
		$modelito -> insert($dato);
		return view('object');
	}*/

	public function tabla(){
		$modelito = new bd_model($db);
		$dato['usuarios'] = $modelito -> findAll();
		return view('tabla', $dato);
	}
	public function tabla2(){
		$modelito = new bd_model($db);
		$dato['usuarios'] = $modelito -> find([11, 12]);
		return view('tabla2', $dato);
	}
	public function columna2(){
		$modelito = new bd_model($db);
		$dato['usuarios'] = $modelito -> findColumn('nombre');
		return view('tabla2',$dato);
	}
	public function where(){
		$modelito = new bd_model($db);
		$dato['usuarios'] = $modelito -> where('nombre','Rosas') -> findAll();
		return view('tabla2',$dato);
	}

	//--------------------------------------------------------------------

}
