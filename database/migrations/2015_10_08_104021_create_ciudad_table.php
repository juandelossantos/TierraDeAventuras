<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiudadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ciudad', function(Blueprint $table)
		{
			$table->integer('id_ciudad', true);
			$table->smallInteger('cod_pais')->index('fk_ciudad_pais1_idx');
			$table->string('ciud_nombre', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ciudad');
	}

}
