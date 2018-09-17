<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTiposLiquidacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tiposLiquidaciones', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('descripcion', 50)->nullable();
			$table->string('swGenerador_id', 50)->nullable();
			$table->integer('sector_id')->nullable();
			$table->timestamps();
			$table->dateTime('deleted_ad')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tiposLiquidaciones');
	}

}
