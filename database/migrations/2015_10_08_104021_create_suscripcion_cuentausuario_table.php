<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuscripcionCuentausuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suscripcion_cuentausuario', function(Blueprint $table)
		{
			$table->integer('id_suscripcion_usuario')->primary();
			$table->smallInteger('cod_plan')->index('fk_suscripcion_usuario_plan1_idx');
			$table->integer('cod_cuentausuario')->index('fk_suscripcion_cuentausuario_cuentausuario1_idx');
			$table->string('suus_estado', 1);
			$table->date('suus_fecha_suscripcion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('suscripcion_cuentausuario');
	}

}
