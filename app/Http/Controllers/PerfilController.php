<?php namespace App\Http\Controllers;

class PerfilController extends Controller {

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
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
	//	return View('rrhh.perfil');
		

    return View('rrhh.perfil')->with('datos', $term);

	
		foreach ($queries as $query)
		{
		    $results[] = [ 'value' => $query->codigo, 'id' => $query->id,'codigo' => $query->codigo,'tipo' => $query->tipo,'descripcion' => $query->descripcion,'salarioBasico' => $query->salarioBasico,'pago' => $query->pago];
		}        
	        return response()->json($results);

	}   

 	/*public function SearchUser(){	
        $term =  Request::input('term');
        //$term = Input::get('term');
        
        
	$results = array();
	
	$queries = DB::table('perfil')
		->where('codigo', 'LIKE', '%'.$term.'%')		
		->get();
	
		foreach ($queries as $query)
		{
		    $results[] = [ 'value' => $query->codigo, 'id' => $query->id,'codigo' => $query->codigo,'tipo' => $query->tipo,'descripcion' => $query->descripcion,'salarioBasico' => $query->salarioBasico,'pago' => $query->pago];
		}        
	        return response()->json($results);
    }*/

}



