<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActividadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividad', function(Blueprint $table)
		{
			$table->integer('id_actividad', true);
			$table->string('acti_nombre', 45);
			$table->string('acti_descripcion', 512);
			$table->string('acti_estado', 1);
			$table->string('acti_tipo', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actividad');
	}

}
