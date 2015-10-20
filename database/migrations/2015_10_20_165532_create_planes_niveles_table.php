<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanesNivelesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planes_niveles', function(Blueprint $table)
		{
			$table->smallInteger('cod_plan')->index('fk_plan_has_nivel_plan1_idx');
			$table->integer('cod_nivel')->index('fk_plan_has_nivel_nivel1_idx');
			$table->primary(['cod_plan','cod_nivel']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planes_niveles');
	}

}
