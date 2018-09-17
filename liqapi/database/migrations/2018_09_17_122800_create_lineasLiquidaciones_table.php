<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLineasLiquidacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lineasLiquidaciones', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('liquidacion_id');
			$table->string('concepto', 50)->nullable();
			$table->string('tipoLinea', 1)->nullable();
			$table->decimal('importe', 18, 0)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lineasLiquidaciones');
	}

}
