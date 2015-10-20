<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJuegosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('juegos', function(Blueprint $table)
		{
			$table->foreign('cod_tipo_juego', 'fk_juego_tipo_juego1')->references('id_tipo_juego')->on('tipos_juegos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_nivel', 'fk_juego_nivel1')->references('id_nivel')->on('niveles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('juegos', function(Blueprint $table)
		{
			$table->dropForeign('fk_juego_tipo_juego1');
			$table->dropForeign('fk_juego_nivel1');
		});
	}

}
