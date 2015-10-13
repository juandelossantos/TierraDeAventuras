<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSesionUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sesion_usuario', function(Blueprint $table)
		{
			$table->foreign('cod_usuario', 'fk_sesion_usuario_usuario2')->references('id_usuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sesion_usuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_sesion_usuario_usuario2');
		});
	}

}
