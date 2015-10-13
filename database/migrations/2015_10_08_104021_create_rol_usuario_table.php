<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rol_usuario', function(Blueprint $table)
		{
			$table->integer('cod_usuario')->index('fk_usuario_has_rol_usuario1_idx');
			$table->smallInteger('cod_rol')->index('fk_usuario_has_rol_rol1_idx');
			$table->primary(['cod_usuario','cod_rol']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rol_usuario');
	}

}
