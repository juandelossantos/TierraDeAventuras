<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuentasUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cuentas_usuarios', function(Blueprint $table)
		{
			$table->integer('id_cuenta_usuario')->primary();
			$table->integer('cod_usuario')->index('fk_cuenta_usuario_usuario1_idx');
			$table->string('cuus_nickname', 45);
			$table->string('cuus_password', 45);
			$table->boolean('cuus_tiempo_limite');
			$table->string('cuus_estado', 1);
			$table->string('cuus_lenguaje', 2);
			$table->boolean('cuus_alerta')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cuentas_usuarios');
	}

}
