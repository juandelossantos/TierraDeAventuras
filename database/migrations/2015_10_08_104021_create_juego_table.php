<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJuegoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('juego', function(Blueprint $table)
		{
			$table->integer('id_juego', true);
			$table->boolean('cod_tipo_juego')->index('fk_juego_tipo_juego1_idx');
			$table->string('jueg_nombre', 45);
			$table->string('jueg_estado', 1);
			$table->date('jueg_fecha_creacion');
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
		Schema::drop('juego');
	}

}
