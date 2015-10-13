<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRetroalimentacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('retroalimentacion', function(Blueprint $table)
		{
			$table->integer('id_retroalimentacion', true);
			$table->integer('cod_actmislogjue')->nullable()->index('fk_retroalimentacion_actividad_mision_logro_juego1_idx');
			$table->integer('cod_usuario')->index('fk_retroalimentacion_usuario1_idx');
			$table->string('retr_mensaje_adicional')->nullable();
			$table->dateTime('retr_fecha_registro');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('retroalimentacion');
	}

}
