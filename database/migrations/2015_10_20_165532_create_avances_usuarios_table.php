<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvancesUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avances_usuarios', function(Blueprint $table)
		{
			$table->integer('id_avance_usuario', true);
			$table->integer('cod_parametrizacion')->nullable()->index('fk_resumen_avance_usuario_actividad_mision_logro_juego1_idx');
			$table->integer('cod_usuario')->index('fk_resumen_avance_usuario_usuario1_idx');
			$table->integer('cod_objeto')->nullable()->index('fk_sesion_usuario_detalle_variable1_idx');
			$table->integer('avus_valor');
			$table->dateTime('avus_fecha_actualizacion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('avances_usuarios');
	}

}
