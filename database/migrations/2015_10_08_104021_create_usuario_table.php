<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->integer('id_usuario', true);
			$table->integer('cod_registro_usuario')->index('fk_usuario_solicitudcreacion1_idx');
			$table->integer('cod_usuario_acudiente')->nullable()->index('fk_usuario_usuario1_idx');
			$table->integer('cod_ciudad')->index('fk_usuario_ciudad1_idx');
			$table->integer('usua_codigo')->nullable();
			$table->string('usua_nombres', 128);
			$table->string('usua_apellidos', 128);
			$table->string('usua_email', 128);
			$table->string('usua_genero', 1);
			$table->date('usua_fecha_creacion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario');
	}

}
