<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActividadMisionLogroJuegoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('actividad_mision_logro_juego', function(Blueprint $table)
		{
			$table->foreign('cod_juego', 'fk_isla_has_mision_isla1')->references('id_juego')->on('juego')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_mision', 'fk_isla_has_mision_mision1')->references('id_mision')->on('mision')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_actividad', 'fk_actividad_mision_logro_juego_actividad1')->references('id_actividad')->on('actividad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_logro', 'fk_actividad_mision_logro_juego_logro1')->references('id_logro')->on('logro')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('actividad_mision_logro_juego', function(Blueprint $table)
		{
			$table->dropForeign('fk_isla_has_mision_isla1');
			$table->dropForeign('fk_isla_has_mision_mision1');
			$table->dropForeign('fk_actividad_mision_logro_juego_actividad1');
			$table->dropForeign('fk_actividad_mision_logro_juego_logro1');
		});
	}

}
