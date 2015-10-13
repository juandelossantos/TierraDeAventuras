<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSesionUsuarioDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sesion_usuario_detalle', function(Blueprint $table)
		{
			$table->integer('id_sesion_usuario_detalle', true);
			$table->integer('cod_actmislogjue')->index('fk_sesion_usuario_detalle_actividad_mision_logro_juego1_idx');
			$table->integer('cod_sesion_usuario')->index('fk_sesion_usuario_detalle_sesion_usuario1_idx');
			$table->integer('cod_objeto')->nullable()->index('fk_sesion_usuario_detalle_variable1_idx');
			$table->integer('seud_valor');
			$table->dateTime('seud_fecha_inicio');
			$table->dateTime('seud_fecha_fin');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sesion_usuario_detalle');
	}

}
