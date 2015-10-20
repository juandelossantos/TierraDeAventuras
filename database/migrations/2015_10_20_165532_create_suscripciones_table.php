<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuscripcionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suscripciones', function(Blueprint $table)
		{
			$table->integer('id_suscripcion')->primary();
			$table->smallInteger('cod_plan')->index('fk_suscripcion_usuario_plan1_idx');
			$table->integer('cod_cuentausuario')->index('fk_suscripcion_cuentausuario_cuentausuario1_idx');
			$table->string('susc_estado', 1);
			$table->date('susc_fecha_suscripcion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('suscripciones');
	}

}
