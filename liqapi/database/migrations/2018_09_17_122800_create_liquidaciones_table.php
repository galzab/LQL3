<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLiquidacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('liquidaciones', function(Blueprint $table)
		{
			$table->bigInteger('id')->primary('PK__liquidac__3213E83F33A26F3E');
			$table->string('nombre');
			$table->date('fechaGeneracion');
			$table->bigInteger('tipo_id');
			$table->bigInteger('empresa_id');
			$table->bigInteger('periodo_id');
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
		Schema::drop('liquidaciones');
	}

}
