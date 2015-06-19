<?php
namespace App\Http\Controllers;


use App\Http\Requests\FormTestValidation;
use App\Models\DatosPersonal;
use Request;
use Auth;
use Session;
use DB;

class InscripcionController extends Controller {

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
		return View('rrhh.inscripcion');
	}   

	 public function SearchUser(){	
        $term =  Request::input('term');
        //$term = Input::get('term');
        
        
	$results = array();
	
	$queries = DB::table('usuario')
		->where('cedula', 'LIKE', '%'.$term.'%')		
		->get();
	
	foreach ($queries as $query)
	{
	    $results[] = ['value' => $query->cedula, 'id' => $query->id, 'campaña' => $query->campaña, 'tipoDocumento' => $query->tipoDocumento, $query->id,'numeroDocumento' => $query->numeroDocumento, 'nombre' => $query->nombre, 'apellido' => $query->apellido, 'fechaNacimiento' => $query->fechaNacimiento,'fechaExpedicion' => $query->fechaExpedicion, 'lugarExpedicion' => $query->lugarExpedicion,'genero' => $query->genero,'RH' => $query->RH,  'cargo' => $query->cargo,'EPS' => $query->EPS,'Pension' => $query->Pension, 'estadoCivil' => $query->estadoCivil,'direccion' => $query->direccion,'telefono1' => $query->telefono1,'telefono2' => $query->telefono2,'celular1' => $query->celular1,'celular2' => $query->celular2,'telefonoContacto' => $query->telefonoContacto,'email' => $query->email,'profesion' => $query->profesion ];
	}        
        return response()->json($results);
    }


    public function guardar() {
      
        $data = Request::input('data');
        
        if ( empty($data['numeroDocumento']) ) {
            Session::flash('error', 'El campo Numero Documento esta vacio');
            return view('rrhh.inscripcion');
        }
         if(!empty($data['id'])){
            $user = DatosPersonal::find($data['id']);            
        }else{
            $user = new DatosPersonal();
        }

        $user->campaña = $data['campaña'];
        $user->tipoDocumento = $data['tipoDocumento'];
        $user->numeroDocumento = $data['numeroDocumento'];
        $user->nombre = $data['nombre'];
        $user->apellido = $data['apellido'];          
        $user->fechaNacimiento = $data['fechaNacimiento'];
        $user->fechaExpedicion = $data['fechaExpedicion'];
        $user->lugarExpedicion = $data['lugarExpedicion'];
        $user->genero = $data['genero'];
        $user->RH = $data['RH'];        
        $user->cargo = $data['cargo'];
        $user->EPS = $data['EPS'];
        $user->pension = $data['pension'];
        $user->estadoCivil = $data['estadoCivil'];
        $user->direccion = $data['direccion'];
        $user->telefono1 = $data['telefono1'];
        $user->telefono2 = $data['telefono2'];
        $user->celular1 = $data['celular1'];
        $user->celular2 = $data['celular2'];
        $user->celular2 = $data['telefonoContacto'];
        $user->email = $data['email'];
        $user->profesion = $data['profesion'];
        //$user->activo = $data['activo'];       
        $user->id_users =  Auth::id();
        $user->save();
        
        return View('rrhh.inscripcion');
      
    }     
}