<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResumenAvanceUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resumen_avance_usuario', function(Blueprint $table)
		{
			$table->integer('id_resumen_avance_usuario', true);
			$table->integer('cod_actmislogjue')->nullable()->index('fk_resumen_avance_usuario_actividad_mision_logro_juego1_idx');
			$table->integer('cod_usuario')->index('fk_resumen_avance_usuario_usuario1_idx');
			$table->integer('cod_objeto')->nullable()->index('fk_sesion_usuario_detalle_variable1_idx');
			$table->integer('reau_valor');
			$table->dateTime('reau_fecha_actualizacion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resumen_avance_usuario');
	}

}
