<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilNivelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfilNivel', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_perfil');
			$table->string('nombre');
			$table->integer('salario');
			$table->integer('variable');
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
		Schema::drop('perfilNivel');
	}

}
