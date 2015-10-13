<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMisionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mision', function(Blueprint $table)
		{
			$table->integer('id_mision', true);
			$table->string('misi_nombre', 45);
			$table->string('misi_objetivo', 45);
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
		Schema::drop('mision');
	}

}
