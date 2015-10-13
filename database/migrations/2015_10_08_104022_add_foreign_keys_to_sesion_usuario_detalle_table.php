<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSesionUsuarioDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sesion_usuario_detalle', function(Blueprint $table)
		{
			$table->foreign('cod_objeto', 'fk_sesion_usuario_detalle_variable1')->references('id_objeto')->on('objeto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_sesion_usuario', 'fk_sesion_usuario_detalle_sesion_usuario1')->references('id_sesion_usuario')->on('sesion_usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_actmislogjue', 'fk_sesion_usuario_detalle_actividad_mision_logro_juego1')->references('id_actmislogjue')->on('actividad_mision_logro_juego')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sesion_usuario_detalle', function(Blueprint $table)
		{
			$table->dropForeign('fk_sesion_usuario_detalle_variable1');
			$table->dropForeign('fk_sesion_usuario_detalle_sesion_usuario1');
			$table->dropForeign('fk_sesion_usuario_detalle_actividad_mision_logro_juego1');
		});
	}

}
