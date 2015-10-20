<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSesionesDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sesiones_detalles', function(Blueprint $table)
		{
			$table->foreign('cod_objeto', 'fk_sesion_usuario_detalle_variable1')->references('id_objeto')->on('objetos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_sesion_usuario', 'fk_sesion_usuario_detalle_sesion_usuario1')->references('id_sesion_usuario')->on('sesiones_usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_parametrizacion', 'fk_sesion_usuario_detalle_actividad_mision_logro_juego1')->references('id_parametrizacion')->on('parametrizaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sesiones_detalles', function(Blueprint $table)
		{
			$table->dropForeign('fk_sesion_usuario_detalle_variable1');
			$table->dropForeign('fk_sesion_usuario_detalle_sesion_usuario1');
			$table->dropForeign('fk_sesion_usuario_detalle_actividad_mision_logro_juego1');
		});
	}

}
