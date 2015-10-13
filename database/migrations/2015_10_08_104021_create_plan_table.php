<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan', function(Blueprint $table)
		{
			$table->smallInteger('id_plan')->primary();
			$table->string('plan_codigo', 45)->nullable();
			$table->string('plan_nombre', 45);
			$table->string('plan_estado', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plan');
	}

}
