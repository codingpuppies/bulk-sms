<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->integer('message_id')->primary();
			$table->string('message')->nullable();
			$table->integer('recipient_id')->nullable()->index('fk_messages_1_idx');
			$table->integer('group_id')->nullable()->index('fk_messages_2_idx');
			$table->enum('status', array('success','failed'))->nullable();
			$table->date('send_date')->nullable();
			$table->integer('is_scheduled')->nullable();
			$table->timestamps();
			$table->integer('app_id')->index('fk_messages_app1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages');
	}

}
