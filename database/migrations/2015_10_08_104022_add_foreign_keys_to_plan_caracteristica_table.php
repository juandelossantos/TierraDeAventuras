<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanCaracteristicaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_caracteristica', function(Blueprint $table)
		{
			$table->foreign('cod_plan', 'fk_plan_caracteristica_plan1')->references('id_plan')->on('plan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('plan_caracteristica', function(Blueprint $table)
		{
			$table->dropForeign('fk_plan_caracteristica_plan1');
		});
	}

}
