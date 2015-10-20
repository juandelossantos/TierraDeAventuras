<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActividadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividades', function(Blueprint $table)
		{
			$table->integer('id_actividad', true);
			$table->string('acti_nombre_es', 128);
			$table->string('acti_nombre_en', 128);
			$table->text('acti_descripcion_es', 65535);
			$table->text('acti_descripcion_en', 65535);
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
		Schema::drop('actividades');
	}

}
