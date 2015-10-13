<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCiudadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ciudad', function(Blueprint $table)
		{
			$table->foreign('cod_pais', 'fk_ciudad_pais1')->references('id_pais')->on('pais')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ciudad', function(Blueprint $table)
		{
			$table->dropForeign('fk_ciudad_pais1');
		});
	}

}
