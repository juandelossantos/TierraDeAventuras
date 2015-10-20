<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logros', function(Blueprint $table)
		{
			$table->integer('id_logro', true);
			$table->string('logr_nombre_es', 128);
			$table->string('logr_nombre_en', 128);
			$table->text('logr_descripcion_es', 65535);
			$table->text('logr_descripcion_en', 65535);
			$table->dateTime('logr_fecha_creacion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logros');
	}

}
