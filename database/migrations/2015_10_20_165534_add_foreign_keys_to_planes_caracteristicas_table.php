<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanesCaracteristicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('planes_caracteristicas', function(Blueprint $table)
		{
			$table->foreign('cod_plan', 'fk_plan_caracteristica_plan1')->references('id_plan')->on('planes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('planes_caracteristicas', function(Blueprint $table)
		{
			$table->dropForeign('fk_plan_caracteristica_plan1');
		});
	}

}
