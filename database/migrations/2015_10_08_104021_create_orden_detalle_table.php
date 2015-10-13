<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdenDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orden_detalle', function(Blueprint $table)
		{
			$table->integer('id_orden_detalle', true);
			$table->string('cod_orde_referencia', 45)->index('fk_factura_detalle_factura1_idx');
			$table->integer('cod_suscripcion_cuentausuario')->index('fk_factura_detalle_suscripcion_cuentausuario1_idx');
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
		Schema::drop('orden_detalle');
	}

}
