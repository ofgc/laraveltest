<?php

namespace ado2018\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
 
	public function index(){
		return view('index');
	}
	public function crearAdo(){
		return view('crearAdo');	
	}
	public function informes(){
		return view('informes');
	}
}
