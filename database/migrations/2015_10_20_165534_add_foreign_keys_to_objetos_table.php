<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToObjetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('objetos', function(Blueprint $table)
		{
			$table->foreign('cod_objeto_padre', 'fk_objeto_objeto1')->references('id_objeto')->on('objetos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('objetos', function(Blueprint $table)
		{
			$table->dropForeign('fk_objeto_objeto1');
		});
	}

}
