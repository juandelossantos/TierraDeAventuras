<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanesCaracteristicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planes_caracteristicas', function(Blueprint $table)
		{
			$table->integer('id_plan_caracteristica')->primary();
			$table->smallInteger('cod_plan')->index('fk_plan_caracteristica_plan1_idx');
			$table->integer('plca_codigo');
			$table->string('plca_nombre', 45);
			$table->integer('plca_carac_int')->nullable();
			$table->text('plca_carac_var', 65535)->nullable();
			$table->dateTime('plca_carac_dat')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planes_caracteristicas');
	}

}
