<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParametrizacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parametrizaciones', function(Blueprint $table)
		{
			$table->integer('id_parametrizacion')->primary();
			$table->integer('cod_actividad')->index('fk_actividad_mision_logro_juego_actividad1_idx');
			$table->integer('cod_mision')->index('fk_isla_has_mision_mision1_idx');
			$table->integer('cod_logro')->index('fk_actividad_mision_logro_juego_logro1_idx');
			$table->integer('cod_juego')->index('fk_isla_has_mision_isla1_idx');
			$table->boolean('para_porcentaje');
			$table->boolean('para_orden');
			$table->text('para_recomendacion', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parametrizaciones');
	}

}
