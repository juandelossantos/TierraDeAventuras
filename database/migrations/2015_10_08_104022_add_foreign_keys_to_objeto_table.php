<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToObjetoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('objeto', function(Blueprint $table)
		{
			$table->foreign('cod_objeto_padre', 'fk_objeto_objeto1')->references('id_objeto')->on('objeto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('objeto', function(Blueprint $table)
		{
			$table->dropForeign('fk_objeto_objeto1');
		});
	}

}
