<?php namespace App\Http\Controllers;

class CargoController extends Controller {

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
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		return View('rrhh.cargo');
	}   
/*
	foreach ($queries as $query)
	{
	    $results[] = [ 'value' => $query->codigo, 'id' => $query->id,'codigo' => $query->codigo,'nombre' => $query->nombre,'salario' => $query->salario,'variable' => $query->variable,'pago' => $query->pago,'fecha' => $query->fecha];
	}        
        return response()->json($results);
    }
/
	public function save() {
      
        $data = Request::input('data');
        /*
        if(!empty($data['codigo'])){
            $user = DatosCargo::find($data['id']);            
        }else{
            $user = new DatosCargo();
        }

        $user->codigo = $data['codigo'];
        $user->nombre = $data['nombre'];
        $user->salario = $data['salario'];
        $user->variable = $data['variable'];
        $user->pago = $data['pago'];
        $user->fecha = $data['fecha'];
        $user->save();
        
        return View('rrhh.cargo');
      
    }*/
 
	
} 

