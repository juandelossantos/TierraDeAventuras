<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolesUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('roles_usuarios', function(Blueprint $table)
		{
			$table->foreign('cod_usuario', 'fk_usuario_has_rol_usuario1')->references('id_usuario')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_rol', 'fk_usuario_has_rol_rol1')->references('id_rol')->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roles_usuarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_usuario_has_rol_usuario1');
			$table->dropForeign('fk_usuario_has_rol_rol1');
		});
	}

}
