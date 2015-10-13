<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransaccionPasarelaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transaccion_pasarela', function(Blueprint $table)
		{
			$table->foreign('reference_sale', 'fk_transaccion_pasarela_orden1')->references('id_orde_referencia')->on('orden')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transaccion_pasarela', function(Blueprint $table)
		{
			$table->dropForeign('fk_transaccion_pasarela_orden1');
		});
	}

}
