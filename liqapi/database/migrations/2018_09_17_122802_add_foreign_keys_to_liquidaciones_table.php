<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLiquidacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('liquidaciones', function(Blueprint $table)
		{
			$table->foreign('tipo_id', 'FK_liquidaciones_tiposLiquidaciones_id')->references('id')->on('tiposLiquidaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('empresa_id', 'FK_liquidaciones_empresas_id')->references('id')->on('empresas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('periodo_id', 'FK_liquidaciones_periodos_id')->references('id')->on('periodos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('liquidaciones', function(Blueprint $table)
		{
			$table->dropForeign('FK_liquidaciones_tiposLiquidaciones_id');
			$table->dropForeign('FK_liquidaciones_empresas_id');
			$table->dropForeign('FK_liquidaciones_periodos_id');
		});
	}

}
