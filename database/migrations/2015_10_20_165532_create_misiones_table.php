<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMisionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('misiones', function(Blueprint $table)
		{
			$table->integer('id_mision', true);
			$table->string('misi_nombre_es', 128);
			$table->string('misi_nombre_en', 128);
			$table->text('misi_objetivo_es', 65535);
			$table->text('misi_objetivo_en', 65535);
			$table->string('misi_estado', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('misiones');
	}

}
