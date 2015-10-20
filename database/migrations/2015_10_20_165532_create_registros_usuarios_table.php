<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrosUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registros_usuarios', function(Blueprint $table)
		{
			$table->integer('id_registro_usuario')->primary();
			$table->smallInteger('reus_tipo_id')->nullable();
			$table->integer('reus_identificacion')->nullable();
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
		Schema::drop('registros_usuarios');
	}

}
