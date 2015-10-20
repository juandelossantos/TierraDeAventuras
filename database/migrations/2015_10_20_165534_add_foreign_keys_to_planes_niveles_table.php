<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanesNivelesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('planes_niveles', function(Blueprint $table)
		{
			$table->foreign('cod_plan', 'fk_plan_has_nivel_plan1')->references('id_plan')->on('planes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_nivel', 'fk_plan_has_nivel_nivel1')->references('id_nivel')->on('niveles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('planes_niveles', function(Blueprint $table)
		{
			$table->dropForeign('fk_plan_has_nivel_plan1');
			$table->dropForeign('fk_plan_has_nivel_nivel1');
		});
	}

}
