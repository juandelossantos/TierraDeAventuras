<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrivilegiosRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('privilegios_roles', function(Blueprint $table)
		{
			$table->foreign('cod_privilegio', 'fk_privilegio_has_rol_privilegio')->references('id_privilegio')->on('privilegios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_rol', 'fk_privilegio_has_rol_rol1')->references('id_rol')->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('privilegios_roles', function(Blueprint $table)
		{
			$table->dropForeign('fk_privilegio_has_rol_privilegio');
			$table->dropForeign('fk_privilegio_has_rol_rol1');
		});
	}

}
