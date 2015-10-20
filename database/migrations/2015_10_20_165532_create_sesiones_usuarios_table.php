<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSesionesUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sesiones_usuarios', function(Blueprint $table)
		{
			$table->integer('id_sesion_usuario')->primary();
			$table->integer('cod_usuario')->index('fk_sesion_usuario_usuario2_idx');
			$table->dateTime('seus_fecha_inicio');
			$table->dateTime('seus_fecha_fin');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sesiones_usuarios');
	}

}
