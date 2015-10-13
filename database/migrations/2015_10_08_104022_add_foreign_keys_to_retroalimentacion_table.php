<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRetroalimentacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('retroalimentacion', function(Blueprint $table)
		{
			$table->foreign('cod_usuario', 'fk_retroalimentacion_usuario1')->references('id_usuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_actmislogjue', 'fk_retroalimentacion_actividad_mision_logro_juego1')->references('id_actmislogjue')->on('actividad_mision_logro_juego')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('retroalimentacion', function(Blueprint $table)
		{
			$table->dropForeign('fk_retroalimentacion_usuario1');
			$table->dropForeign('fk_retroalimentacion_actividad_mision_logro_juego1');
		});
	}

}
