<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanCaracteristicaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_caracteristica', function(Blueprint $table)
		{
			$table->integer('id_plan_caracteristica')->primary();
			$table->smallInteger('cod_plan')->index('fk_plan_caracteristica_plan1_idx');
			$table->integer('plca_codigo');
			$table->string('plca_nombre', 45);
			$table->integer('plca_valor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plan_caracteristica');
	}

}
