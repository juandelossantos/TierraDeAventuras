<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNivelesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('niveles', function(Blueprint $table)
		{
			$table->integer('id_nivel', true);
			$table->string('nive_nombre_es', 256);
			$table->string('nive_nombre_en', 256)->nullable();
			$table->string('nive_descripcion_es', 512);
			$table->string('nive_descripcion_en', 512)->nullable();
			$table->string('nive_estado', 1);
			$table->dateTime('nive_fecha_creacion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('niveles');
	}

}
