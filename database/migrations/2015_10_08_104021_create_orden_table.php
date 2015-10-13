<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orden', function(Blueprint $table)
		{
			$table->string('id_orde_referencia')->primary();
			$table->integer('cod_usuario')->index('fk_factura_usuario1_idx');
			$table->integer('cod_empresa')->index('fk_factura_empresa1_idx');
			$table->decimal('orde_valor_total', 16);
			$table->integer('orde_base_impuesto');
			$table->decimal('orde_impuesto', 16);
			$table->string('orde_descripcion', 45);
			$table->string('orde_estado', 1);
			$table->date('orde_fecha_creacion');
			$table->string('orde_codigo_factura', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orden');
	}

}
