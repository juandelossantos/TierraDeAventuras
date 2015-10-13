<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdenDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orden_detalle', function(Blueprint $table)
		{
			$table->foreign('cod_orde_referencia', 'fk_factura_detalle_factura1')->references('id_orde_referencia')->on('orden')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_suscripcion_cuentausuario', 'fk_factura_detalle_suscripcion_cuentausuario1')->references('id_suscripcion_usuario')->on('suscripcion_cuentausuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orden_detalle', function(Blueprint $table)
		{
			$table->dropForeign('fk_factura_detalle_factura1');
			$table->dropForeign('fk_factura_detalle_suscripcion_cuentausuario1');
		});
	}

}
