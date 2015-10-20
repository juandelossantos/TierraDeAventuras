<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRetroalimentacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('retroalimentaciones', function(Blueprint $table)
		{
			$table->foreign('cod_usuario_emisor', 'fk_retroalimentacion_usuario1')->references('id_usuario')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_parametrizacion', 'fk_retroalimentacion_actividad_mision_logro_juego1')->references('id_parametrizacion')->on('parametrizaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('retroalimentaciones', function(Blueprint $table)
		{
			$table->dropForeign('fk_retroalimentacion_usuario1');
			$table->dropForeign('fk_retroalimentacion_actividad_mision_logro_juego1');
		});
	}

}
