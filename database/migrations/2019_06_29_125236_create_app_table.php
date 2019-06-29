<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('app', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('user_id', 45)->nullable();
			$table->integer('users_id')->unsigned()->index('fk_app_users_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('app');
	}

}
