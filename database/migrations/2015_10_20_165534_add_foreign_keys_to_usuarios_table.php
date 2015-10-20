<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuarios', function(Blueprint $table)
		{
			$table->foreign('cod_registro_usuario', 'fk_usuario_solicitudcreacion1')->references('id_registro_usuario')->on('registros_usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_usuario_acudiente', 'fk_usuario_usuario1')->references('id_usuario')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_ciudad', 'fk_usuario_ciudad1')->references('id_ciudad')->on('ciudades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_usuario_solicitudcreacion1');
			$table->dropForeign('fk_usuario_usuario1');
			$table->dropForeign('fk_usuario_ciudad1');
		});
	}

}
