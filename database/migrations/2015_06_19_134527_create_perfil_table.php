<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfil', function(Blueprint $table)
		{
			$table->increments('id');			       
				$table->string('codigo');
				$table->string('tipo');
				$table->string('descripcion');
				$table->integer('salarioBasico');
				$table->integer('variable');
				$table->integer('pago');
				$user->id_users =  Auth::id();
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
		Schema::drop('perfil');
	}

}
