<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSesionesDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sesiones_detalles', function(Blueprint $table)
		{
			$table->integer('id_sesion_detalle', true);
			$table->integer('cod_parametrizacion')->index('fk_sesion_usuario_detalle_actividad_mision_logro_juego1_idx');
			$table->integer('cod_sesion_usuario')->index('fk_sesion_usuario_detalle_sesion_usuario1_idx');
			$table->integer('cod_objeto')->nullable()->index('fk_sesion_usuario_detalle_variable1_idx');
			$table->integer('sede_valor');
			$table->dateTime('sede_fecha_registro');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sesiones_detalles');
	}

}
