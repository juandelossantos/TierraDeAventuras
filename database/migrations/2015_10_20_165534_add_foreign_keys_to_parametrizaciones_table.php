<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParametrizacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parametrizaciones', function(Blueprint $table)
		{
			$table->foreign('cod_juego', 'fk_isla_has_mision_isla1')->references('id_juego')->on('juegos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_mision', 'fk_isla_has_mision_mision1')->references('id_mision')->on('misiones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_actividad', 'fk_actividad_mision_logro_juego_actividad1')->references('id_actividad')->on('actividades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_logro', 'fk_actividad_mision_logro_juego_logro1')->references('id_logro')->on('logros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parametrizaciones', function(Blueprint $table)
		{
			$table->dropForeign('fk_isla_has_mision_isla1');
			$table->dropForeign('fk_isla_has_mision_mision1');
			$table->dropForeign('fk_actividad_mision_logro_juego_actividad1');
			$table->dropForeign('fk_actividad_mision_logro_juego_logro1');
		});
	}

}
