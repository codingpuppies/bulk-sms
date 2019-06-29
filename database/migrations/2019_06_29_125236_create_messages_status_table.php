<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages_status', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('recipient_id')->nullable()->index('fk_messages_status_2_idx');
			$table->integer('message_id')->nullable()->index('fk_messages_status_1_idx');
			$table->string('status', 45)->nullable();
			$table->string('date_sent', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages_status');
	}

}
