<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


use App\Http\Requests\FormTestValidation;
use App\Models\DatosPersonal;
use Request;
use Auth;
use Session;
use DB;

class CreatePersonalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('campaña');
			$table->string('tipoDocumento');
			$table->string('numeroDocumento');
			$table->string('nombre');
			$table->string('apellido');		    
		    $table->string('fechaNacimiento');
		    $table->string('fechaExpedicion');
		    $table->string('lugarExpedicion');
		    $table->string('genero');
		    $table->string('RH');
		    $table->string('cargo');
		    $table->string('EPS');
		    $table->string('pension');
		    $table->string('estadoCivil');
		    $table->string('direccion');
		    $table->string('telefono1');
		    $table->string('telefono2');
		    $table->integer('celular1');
		    $table->integer('celular2');
		    $table->integer('telefonoContacto');
		    $table->string('email');
		    $table->string('profesion');
		    $table->integer('activo');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personal');
	}

}
