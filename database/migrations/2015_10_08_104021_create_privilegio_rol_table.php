<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrivilegioRolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('privilegio_rol', function(Blueprint $table)
		{
			$table->smallInteger('cod_privilegio')->index('fk_privilegio_has_rol_privilegio_idx');
			$table->smallInteger('cod_rol')->index('fk_privilegio_has_rol_rol1_idx');
			$table->string('prro_estado', 1);
			$table->primary(['cod_privilegio','cod_rol']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('privilegio_rol');
	}

}
