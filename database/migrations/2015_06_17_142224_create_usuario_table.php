<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cedula');
			$table->string('apellido');
		    $table->string('nombre');
		    $table->string('cargo');
		    $table->string('fechaNacimiento');
		    $table->string('fechaExpedicion');
		    $table->string('lugarExpedicion');
		    $table->string('genero');
		    $table->string('RH');
		    $table->string('EPS');
		    $table->string('pension');
		    $table->string('direccion');
		    $table->string('telefono1');
		    $table->string('telefono2');
		    $table->integer('celular1');
		    $table->integer('celular2');
		    $table->string('estadoCivil');
		    $table->string('barrio');
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
		Schema::drop('usuario');
	}

}
