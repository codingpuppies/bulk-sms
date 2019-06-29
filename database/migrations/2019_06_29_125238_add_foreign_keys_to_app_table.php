<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAppTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('app', function(Blueprint $table)
		{
			$table->foreign('users_id', 'fk_app_users')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('app', function(Blueprint $table)
		{
			$table->dropForeign('fk_app_users');
		});
	}

}
