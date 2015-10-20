<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJuegosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('juegos', function(Blueprint $table)
		{
			$table->integer('id_juego', true);
			$table->boolean('cod_tipo_juego')->index('fk_juego_tipo_juego1_idx');
			$table->integer('cod_nivel')->index('fk_juego_nivel1_idx');
			$table->string('jueg_nombre_es', 128);
			$table->string('jueg_nombre_en', 128);
			$table->string('jueg_descripcion_es', 512);
			$table->string('jueg_descripcion_en', 512);
			$table->string('jueg_estado', 1);
			$table->dateTime('jueg_fecha_creacion');
			$table->boolean('jueg_orden');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('juegos');
	}

}
