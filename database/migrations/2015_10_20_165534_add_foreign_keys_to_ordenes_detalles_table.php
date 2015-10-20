<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdenesDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ordenes_detalles', function(Blueprint $table)
		{
			$table->foreign('cod_orde_referencia', 'fk_factura_detalle_factura1')->references('id_orde_referencia')->on('ordenes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_plan', 'fk_orden_detalle_plan1')->references('id_plan')->on('planes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ordenes_detalles', function(Blueprint $table)
		{
			$table->dropForeign('fk_factura_detalle_factura1');
			$table->dropForeign('fk_orden_detalle_plan1');
		});
	}

}
