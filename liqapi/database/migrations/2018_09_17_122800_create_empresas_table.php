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
			$table->bigInteger('id', true);
			$table->string('nombre', 50)->nullable();
			$table->string('cif', 9)->nullable();
			$table->dateTime('created_ad')->nullable();
			$table->softDeletes();
			$table->dateTime('updated_at')->nullable();
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
