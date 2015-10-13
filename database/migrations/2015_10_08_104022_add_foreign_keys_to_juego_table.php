<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJuegoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('juego', function(Blueprint $table)
		{
			$table->foreign('cod_tipo_juego', 'fk_juego_tipo_juego1')->references('id_tipo_juego')->on('tipo_juego')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('juego', function(Blueprint $table)
		{
			$table->dropForeign('fk_juego_tipo_juego1');
		});
	}

}
