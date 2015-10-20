<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSesionesUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sesiones_usuarios', function(Blueprint $table)
		{
			$table->foreign('cod_usuario', 'fk_sesion_usuario_usuario2')->references('id_usuario')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sesiones_usuarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_sesion_usuario_usuario2');
		});
	}

}
