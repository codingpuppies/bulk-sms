<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMessagesStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('messages_status', function(Blueprint $table)
		{
			$table->foreign('message_id', 'fk_messages_status_1')->references('message_id')->on('messages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('recipient_id', 'fk_messages_status_2')->references('contact_id')->on('phonebook')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('messages_status', function(Blueprint $table)
		{
			$table->dropForeign('fk_messages_status_1');
			$table->dropForeign('fk_messages_status_2');
		});
	}

}
