<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresas', function(Blueprint $table)
		{
			$table->integer('id_empresa', true);
			$table->integer('empr_id_comercio');
			$table->integer('empr_cuenta_usuario')->nullable();
			$table->string('empr_nit', 45);
			$table->string('empr_razon_social', 128);
			$table->string('empr_direccion', 128);
			$table->string('empr_email', 128);
			$table->string('empr_telefono', 45);
			$table->string('empr_url_logo', 45)->nullable();
			$table->string('empr_slogan', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empresas');
	}

}
