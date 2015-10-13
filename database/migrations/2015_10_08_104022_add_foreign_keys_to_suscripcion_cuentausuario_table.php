<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSuscripcionCuentausuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('suscripcion_cuentausuario', function(Blueprint $table)
		{
			$table->foreign('cod_plan', 'fk_suscripcion_usuario_plan1')->references('id_plan')->on('plan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_cuentausuario', 'fk_suscripcion_cuentausuario_cuentausuario1')->references('id_cuenta_usuario')->on('cuenta_usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('suscripcion_cuentausuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_suscripcion_usuario_plan1');
			$table->dropForeign('fk_suscripcion_cuentausuario_cuentausuario1');
		});
	}

}
