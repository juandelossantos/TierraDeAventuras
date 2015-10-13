<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuario', function(Blueprint $table)
		{
			$table->foreign('cod_registro_usuario', 'fk_usuario_solicitudcreacion1')->references('id_registro_usuario')->on('registro_usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_usuario_acudiente', 'fk_usuario_usuario1')->references('id_usuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_ciudad', 'fk_usuario_ciudad1')->references('id_ciudad')->on('ciudad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_usuario_solicitudcreacion1');
			$table->dropForeign('fk_usuario_usuario1');
			$table->dropForeign('fk_usuario_ciudad1');
		});
	}

}
