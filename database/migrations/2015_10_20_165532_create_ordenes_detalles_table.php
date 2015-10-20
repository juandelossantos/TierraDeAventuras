<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdenesDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordenes_detalles', function(Blueprint $table)
		{
			$table->integer('id_orden_detalle', true);
			$table->string('cod_orde_referencia', 45)->index('fk_factura_detalle_factura1_idx');
			$table->smallInteger('cod_plan')->index('fk_orden_detalle_plan1_idx');
			$table->decimal('odet_valor_unitario', 16);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ordenes_detalles');
	}

}
