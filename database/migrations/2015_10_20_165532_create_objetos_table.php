<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('objetos', function(Blueprint $table)
		{
			$table->integer('id_objeto', true);
			$table->integer('cod_objeto_padre')->nullable()->index('fk_objeto_objeto1_idx');
			$table->string('obje_nombre_es', 45);
			$table->string('obje_nombre_en', 45);
			$table->string('obje_estado', 1);
			$table->string('obje_tipo', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('objetos');
	}

}
