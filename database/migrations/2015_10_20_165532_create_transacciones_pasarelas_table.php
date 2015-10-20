<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransaccionesPasarelasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transacciones_pasarelas', function(Blueprint $table)
		{
			$table->integer('id_transaccion_pasarela', true);
			$table->string('reference_sale')->nullable()->index('fk_transaccion_pasarela_orden1_idx');
			$table->string('transaction_id', 36)->nullable();
			$table->string('reference_pol')->nullable();
			$table->integer('mechant_id');
			$table->string('state_pool', 32);
			$table->string('response_code_pol');
			$table->integer('payment_method')->nullable();
			$table->integer('payment_method_type')->nullable();
			$table->integer('installments_number')->nullable();
			$table->decimal('value', 14)->nullable();
			$table->decimal('tax', 14)->nullable();
			$table->dateTime('transaction_date')->nullable();
			$table->string('currency', 3)->nullable();
			$table->string('email_buyer')->nullable();
			$table->string('cus', 64)->nullable();
			$table->string('pse_bank')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transacciones_pasarelas');
	}

}
