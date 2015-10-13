<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoJuegoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_juego', function(Blueprint $table)
		{
			$table->boolean('id_tipo_juego')->primary();
			$table->string('tiju_nombre', 45);
			$table->string('tiju_descripcion', 1024);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_juego');
	}

}
