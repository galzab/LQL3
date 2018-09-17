<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLineasLiquidacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lineasLiquidaciones', function(Blueprint $table)
		{
			$table->foreign('liquidacion_id', 'FK_lineasLiquidaciones_liquidaciones_id')->references('id')->on('liquidaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lineasLiquidaciones', function(Blueprint $table)
		{
			$table->dropForeign('FK_lineasLiquidaciones_liquidaciones_id');
		});
	}

}
