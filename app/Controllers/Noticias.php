<?php namespace App\Controllers;

use App\Models\bd_noticias;
use App\Models\bd_model;

class Noticias extends BaseController
{
	public function Principal()
	{
		return view('encabezado').view('Principal');
	}
	public function PrincipalAdmin()
	{
		return view('encabezado').view('PrincipalAdmin');
	}
	public function PaginaP()
	{
		return view('encabezado').view('PaginaP');
	}
	public function PaginaPA()
	{
		return view('encabezado').view('PaginaPA');
	}
	public function index()
	{
		return view('encabezadoLogin').view('index');
	}
	public function indexAdmin()
	{
		return view('encabezadoLogin').view('indexAdmin');
	}
	public function FormularioPersona()
	{
		return view('encabezadoFormulario').view('FormularioPersona');
	}
	public function FormularioNoticia()
	{
		return view('encabezadoFormulario').view('FormularioNoticia');
	}
	public function validacionUsuario(){
        $request=\Config\Services::request();
        $nom = $request -> getPost('first_name');
        $ape= $request -> getPost('last_name');
        $corr= $request -> getPost('email');
        $tel= $request -> getPost('phone');
        $contra= $request -> getPost('password');

        $dato=[
            'nombre'=> $nom,
            'apellido'=>$ape,
            'email'=> $corr,
            'numero'=> $tel,
            'password'=> $contra
        ];

        $modelito = new bd_model($db);
        $modelito -> insert($dato);
        return view('encabezadoFormulario').view('validacionUsuario');
    }

	public function validacionNoticias()
	{
		$request = \Config\Services::request();
		$tit = $request -> getPost('titulo');
		$ima = $request -> getPost('imagen');
		$con = $request -> getPost('contenido');
		$dato = [
			'titulo' => $tit,
			'imagen' => $ima,
			'contenido' => $con
		];
		$modelito = new bd_noticias($db);
		$modelito -> insert($dato);
		return view('encabezadoFormulario').view('validacionNoticia');
	}
	public function tablaNoticias()
	{
		$modelito = new bd_noticias($db);
		$dato['noticias'] = $modelito -> findAll();
		return view('encabezadoFormulario').view('tablaNoticias', $dato);
	}
	public function noticiasDelete()
	{
		$modelito = new bd_noticias($db);
		$dato['noticias'] = $modelito ->onlyDeleted()-> findAll();
		return view('encabezadoFormulario').view('tablaNoticias', $dato);
	}

	//--------------------------------------------------------------------

}