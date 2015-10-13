<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActividadMisionLogroJuegoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividad_mision_logro_juego', function(Blueprint $table)
		{
			$table->integer('id_actmislogjue')->primary();
			$table->integer('cod_actividad')->index('fk_actividad_mision_logro_juego_actividad1_idx');
			$table->integer('cod_mision')->index('fk_isla_has_mision_mision1_idx');
			$table->integer('cod_logro')->index('fk_actividad_mision_logro_juego_logro1_idx');
			$table->integer('cod_juego')->index('fk_isla_has_mision_isla1_idx');
			$table->boolean('amlj_porcentaje');
			$table->boolean('amlj_orden');
			$table->string('amlj_mensaje');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actividad_mision_logro_juego');
	}

}
