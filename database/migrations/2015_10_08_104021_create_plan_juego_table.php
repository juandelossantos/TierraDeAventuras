<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanJuegoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_juego', function(Blueprint $table)
		{
			$table->smallInteger('cod_plan')->index('fk_plan_has_juego_plan1_idx');
			$table->integer('cod_juego')->index('fk_plan_has_juego_juego1_idx');
			$table->primary(['cod_plan','cod_juego']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plan_juego');
	}

}
