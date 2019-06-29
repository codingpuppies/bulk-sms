<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhonebookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phonebook', function(Blueprint $table)
		{
			$table->integer('contact_id')->primary();
			$table->string('first_name', 45)->nullable();
			$table->string('middle_name', 45)->nullable();
			$table->string('last_name', 45)->nullable();
			$table->string('mobile_no', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->enum('status', array('active','inactive'))->nullable();
			$table->timestamps();
			$table->integer('app_id')->index('fk_phonebook_app1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('phonebook');
	}

}
