<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeriodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('periodos', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('nombre', 20)->nullable();
			$table->date('fechaIniPeriodo')->nullable();
			$table->date('fechaFinPeriodo')->nullable();
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
		Schema::drop('periodos');
	}

}
