<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAvancesUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('avances_usuarios', function(Blueprint $table)
		{
			$table->foreign('cod_objeto', 'fk_sesion_usuario_detalle_variable10')->references('id_objeto')->on('objetos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_usuario', 'fk_resumen_avance_usuario_usuario1')->references('id_usuario')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_parametrizacion', 'fk_resumen_avance_usuario_actividad_mision_logro_juego1')->references('id_parametrizacion')->on('parametrizaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('avances_usuarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_sesion_usuario_detalle_variable10');
			$table->dropForeign('fk_resumen_avance_usuario_usuario1');
			$table->dropForeign('fk_resumen_avance_usuario_actividad_mision_logro_juego1');
		});
	}

}
