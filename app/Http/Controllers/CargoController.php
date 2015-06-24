<?php 
namespace App\Http\Controllers;


use App\Http\Requests\FormTestValidation;
use App\Models\DatosCargo;

//use Illuminate\Database\Eloquent\Model;

use Request;
use Auth;
use Session;
use DB;
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
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	/*public function index()
	{
		return View('rrhh.cargo');
	} */  

	  public function index()
   {     
        return View('rrhh.cargo');
  } 

  public function SearchUser(){	
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
    }

	public function save() {
      
   $data = Request::input('data');
   
        
      if ( empty($data['codigo']) ) {
            Session::flash('error', 'El campo codigo esta vacio');
            return view('rrhh.cargo');
        }
         if(!empty($data['id'])){
            $codigo = DatosCargo::find($data['id']);            
        }else{
            $codigo = new DatosCargo();
        }
        $codigo->codigo = $data['codigo'];
        $codigo->tipo = $data['tipo'];
        $codigo->descripcion = $data['descripcion'];
        $codigo->salarioBasico = $data['salarioBasico'];
        $codigo->variable = $data['variable'];
        $codigo->pago = $data['pago'];
        $codigo->id_users =  Auth::id();       
        $codigo->save();
        
        return View('rrhh.cargo');
        //$codigo = codigo::all();
        //return View::make('rrhh/perfil')->with('codigo', $codigo);
   
    }
} 