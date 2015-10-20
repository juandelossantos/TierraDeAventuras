<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCuentasUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cuentas_usuarios', function(Blueprint $table)
		{
			$table->foreign('cod_usuario', 'fk_cuenta_usuario_usuario1')->references('id_usuario')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cuentas_usuarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_cuenta_usuario_usuario1');
		});
	}

}
