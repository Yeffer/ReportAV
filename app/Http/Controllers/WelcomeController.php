<?php
namespace App\Http\Controllers;

use App\Http\Requests\FormTestValidation;
use App\Models\DatosUsuario;
use Request;
use Auth;
use Session;
use DB;


class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
		//auth
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home.home');
	}   

	/*public function rrhh()
	{
		return View('home.rrhh');
	} */  

}
