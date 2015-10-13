<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistroUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registro_usuario', function(Blueprint $table)
		{
			$table->integer('id_registro_usuario')->primary();
			$table->string('reus_nombres', 128);
			$table->string('reus_apellidos', 128);
			$table->string('reus_email', 128);
			$table->date('reus_fecha_nacimiento');
			$table->string('reus_genero', 1);
			$table->dateTime('reus_fecha_registro');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registro_usuario');
	}

}
