<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanJuegoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_juego', function(Blueprint $table)
		{
			$table->foreign('cod_plan', 'fk_plan_has_juego_plan1')->references('id_plan')->on('plan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_juego', 'fk_plan_has_juego_juego1')->references('id_juego')->on('juego')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('plan_juego', function(Blueprint $table)
		{
			$table->dropForeign('fk_plan_has_juego_plan1');
			$table->dropForeign('fk_plan_has_juego_juego1');
		});
	}

}
