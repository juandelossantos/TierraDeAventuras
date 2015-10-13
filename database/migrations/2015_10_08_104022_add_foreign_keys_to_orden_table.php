<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orden', function(Blueprint $table)
		{
			$table->foreign('cod_usuario', 'fk_factura_usuario1')->references('id_usuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_empresa', 'fk_factura_empresa1')->references('id_empresa')->on('empresa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orden', function(Blueprint $table)
		{
			$table->dropForeign('fk_factura_usuario1');
			$table->dropForeign('fk_factura_empresa1');
		});
	}

}
