<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logro', function(Blueprint $table)
		{
			$table->integer('id_logro', true);
			$table->string('logr_nombre', 45);
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
		Schema::drop('logro');
	}

}
